<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\BinaryFormat;

use Nsfisis\Waddiwasi\Stream\StreamInterface;
use Nsfisis\Waddiwasi\Stream\UnexpectedEofException;
use Nsfisis\Waddiwasi\WebAssembly\BinaryFormat\Internal\Code;
use Nsfisis\Waddiwasi\WebAssembly\BinaryFormat\Internal\Locals;
use Nsfisis\Waddiwasi\WebAssembly\BinaryFormat\Internal\SectionId;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Data;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\DataMode;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Elem;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ElemMode;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Export;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ExportDesc;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Func;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Global_;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Import;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDesc;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Local;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Mem;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Start;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Table;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Mut;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use function array_reduce;
use function assert;
use function count;
use function get_class;
use function in_array;
use function is_float;
use function is_int;
use function ord;
use function sprintf;

final class Decoder
{
    public function __construct(
        private readonly StreamInterface $stream,
    ) {
    }

    public function decode(): Module
    {
        try {
            return $this->doDecode();
        } catch (UnexpectedEofException $e) {
            throw new InvalidBinaryFormatException('eof', previous: $e);
        }
    }

    private function doDecode(): Module
    {
        $this->checkMagic();
        $this->checkVersion();

        $types = $this->decodeSection(SectionId::Type, $this->decodeTypeSecRest(...)) ?? [];
        $imports = $this->decodeSection(SectionId::Import, $this->decodeImportSecRest(...)) ?? [];
        $typeIndices = $this->decodeSection(SectionId::Func, $this->decodeFuncSecRest(...)) ?? [];
        $tables = $this->decodeSection(SectionId::Table, $this->decodeTableSecRest(...)) ?? [];
        $mems = $this->decodeSection(SectionId::Mem, $this->decodeMemSecRest(...)) ?? [];
        $globals = $this->decodeSection(SectionId::Global, $this->decodeGlobalSecRest(...)) ?? [];
        $exports = $this->decodeSection(SectionId::Export, $this->decodeExportSecRest(...)) ?? [];
        $start = $this->decodeSection(SectionId::Start, $this->decodeStartSecRest(...));
        $elems = $this->decodeSection(SectionId::Elem, $this->decodeElemSecRest(...)) ?? [];
        $dataCount = $this->decodeSection(SectionId::DataCount, $this->decodeDataCountSecRest(...));
        $codes = $this->decodeSection(SectionId::Code, $this->decodeCodeSecRest(...)) ?? [];
        $datas = $this->decodeSection(SectionId::Data, $this->decodeDataSecRest(...)) ?? [];

        $this->skipCustomSections();

        if (!$this->stream->eof()) {
            throw new InvalidBinaryFormatException("eof");
        }
        if ($dataCount === null) {
            foreach ($codes as $code) {
                if ($this->countDataIndicesUsedInCode($code) !== 0) {
                    throw new InvalidBinaryFormatException("datacount section is required");
                }
            }
        } else {
            if (count($datas) !== $dataCount) {
                throw new InvalidBinaryFormatException("datasec");
            }
        }
        if (count($typeIndices) !== count($codes)) {
            throw new InvalidBinaryFormatException("number of funcs and codes does not match");
        }

        $funcs = [];
        foreach ($typeIndices as $i => $type) {
            $code = $codes[$i];
            $decompressedLocals = array_map(
                fn ($l) => array_fill(0, $l->count, new Local($l->type)),
                $code->compressedLocals,
            );
            $funcs[] = new Func(
                $type,
                array_merge(...$decompressedLocals),
                $code->body,
            );
        }

        return new Module(
            $types,
            $funcs,
            $tables,
            $mems,
            $globals,
            $elems,
            $datas,
            $start,
            $imports,
            $exports,
        );
    }

    private function checkMagic(): void
    {
        $bs = $this->stream->read(4);
        $b1 = ord($bs[0]);
        $b2 = ord($bs[1]);
        $b3 = ord($bs[2]);
        $b4 = ord($bs[3]);
        if ([$b1, $b2, $b3, $b4] !== [0x00, 0x61, 0x73, 0x6D]) {
            throw new InvalidBinaryFormatException("magic");
        }
    }

    private function checkVersion(): void
    {
        $bs = $this->stream->read(4);
        $b1 = ord($bs[0]);
        $b2 = ord($bs[1]);
        $b3 = ord($bs[2]);
        $b4 = ord($bs[3]);
        if ([$b1, $b2, $b3, $b4] !== [0x01, 0x00, 0x00, 0x00]) {
            throw new InvalidBinaryFormatException(sprintf("version: [%x, %x, %x, %x]", $b1, $b2, $b3, $b4));
        }
    }

    /**
     * @template T
     * @param callable(): T $decoder
     * @return ?T
     */
    private function decodeSection(SectionId $sectionId, callable $decoder): mixed
    {
        $this->skipCustomSections();
        if ($this->stream->eof()) {
            return null;
        }

        $idValue = $this->stream->peekByte();
        $id = SectionId::tryFrom($idValue);
        if ($id === null) {
            throw new InvalidBinaryFormatException("section id");
        }
        if ($id !== $sectionId) {
            return null;
        }
        $this->stream->seek(1);

        $size = $this->decodeU32();
        $prevPos = $this->stream->tell();
        $result = $decoder();
        if ($this->stream->tell() - $prevPos !== $size) {
            throw new InvalidBinaryFormatException("type section size");
        }
        return $result;
    }

    private function skipCustomSections(): void
    {
        while (!$this->stream->eof()) {
            $b = $this->stream->peekByte();
            if ($b !== SectionId::Custom->value) {
                break;
            }
            $this->stream->seek(1);
            $size = $this->decodeU32();
            $prevPos = $this->stream->tell();
            $this->decodeName();
            $encodedSizeOfName = $this->stream->tell() - $prevPos;
            $offset = $size - $encodedSizeOfName;
            if ($offset < 0) {
                throw new InvalidBinaryFormatException("custom section size");
            }
            if ($offset !== 0) {
                $this->stream->seek($offset);
            }
        }
    }

    /**
     * @return list<FuncType>
     */
    private function decodeTypeSecRest(): array
    {
        return $this->decodeVec($this->decodeFuncType(...));
    }

    /**
     * @return list<Import>
     */
    private function decodeImportSecRest(): array
    {
        return $this->decodeVec($this->decodeImport(...));
    }

    /**
     * @return list<int>
     */
    private function decodeFuncSecRest(): array
    {
        return $this->decodeVec($this->decodeTypeIdx(...));
    }

    /**
     * @return list<Table>
     */
    private function decodeTableSecRest(): array
    {
        return $this->decodeVec($this->decodeTable(...));
    }

    /**
     * @return list<Mem>
     */
    private function decodeMemSecRest(): array
    {
        return $this->decodeVec($this->decodeMem(...));
    }

    /**
     * @return list<Global_>
     */
    private function decodeGlobalSecRest(): array
    {
        return $this->decodeVec($this->decodeGlobal(...));
    }

    /**
     * @return list<Export>
     */
    private function decodeExportSecRest(): array
    {
        return $this->decodeVec($this->decodeExport(...));
    }

    private function decodeStartSecRest(): Start
    {
        return new Start($this->decodeFuncIdx());
    }

    /**
     * @return list<Elem>
     */
    private function decodeElemSecRest(): array
    {
        return $this->decodeVec($this->decodeElem(...));
    }

    /**
     * @return list<Code>
     */
    private function decodeCodeSecRest(): array
    {
        return $this->decodeVec($this->decodeCode(...));
    }

    /**
     * @return list<Data>
     */
    private function decodeDataSecRest(): array
    {
        return $this->decodeVec($this->decodeData(...));
    }

    /**
     * @return U32
     */
    private function decodeDataCountSecRest(): int
    {
        return $this->decodeU32();
    }

    /**
     * @return list<ValType>
     */
    private function decodeResultType(): array
    {
        return $this->decodeVec($this->decodeValType(...));
    }

    private function decodeFuncType(): FuncType
    {
        $b = $this->decodeByte();
        if ($b !== 0x60) {
            throw new InvalidBinaryFormatException("functype");
        }
        $params = $this->decodeResultType();
        $results = $this->decodeResultType();
        return new FuncType(
            $params,
            $results,
        );
    }

    private function decodeValType(): ValType
    {
        $b = $this->decodeByte();
        return match ($b) {
            0x7F => ValType::I32,
            0x7E => ValType::I64,
            0x7D => ValType::F32,
            0x7C => ValType::F64,
            0x7B => ValType::V128,
            0x70 => ValType::FuncRef,
            0x6F => ValType::ExternRef,
            default => throw new InvalidBinaryFormatException("valtype $b"),
        };
    }

    /**
     * @return ValType::FuncRef|ValType::ExternRef
     */
    private function decodeRefType(): ValType
    {
        $type = $this->decodeValType();
        return match ($type) {
            ValType::FuncRef, ValType::ExternRef => $type,
            default => throw new InvalidBinaryFormatException("reftype"),
        };
    }

    private function decodeLimits(): Limits
    {
        $b = $this->decodeByte();
        if ($b === 0x00) {
            $min = $this->decodeU32();
            return new Limits($min, null);
        } elseif ($b === 0x01) {
            $min = $this->decodeU32();
            $max = $this->decodeU32();
            return new Limits($min, $max);
        } else {
            throw new InvalidBinaryFormatException("limits");
        }
    }

    private function decodeMemType(): MemType
    {
        return new MemType($this->decodeLimits());
    }

    private function decodeTableType(): TableType
    {
        $refType = $this->decodeRefType();
        $limits = $this->decodeLimits();
        return new TableType(
            $limits,
            $refType,
        );
    }

    private function decodeGlobalType(): GlobalType
    {
        $valType = $this->decodeValType();
        $mut = $this->decodeMut();
        return new GlobalType(
            $mut,
            $valType,
        );
    }

    private function decodeMut(): Mut
    {
        return match ($this->decodeByte()) {
            0x00 => Mut::Const,
            0x01 => Mut::Var,
            default => throw new InvalidBinaryFormatException("mutability"),
        };
    }

    private function decodeImport(): Import
    {
        $module = $this->decodeName();
        $name = $this->decodeName();
        $desc = $this->decodeImportDesc();
        return new Import(
            $module,
            $name,
            $desc,
        );
    }

    private function decodeTable(): Table
    {
        return new Table($this->decodeTableType());
    }

    private function decodeMem(): Mem
    {
        return new Mem($this->decodeMemType());
    }

    private function decodeGlobal(): Global_
    {
        $type = $this->decodeGlobalType();
        $init = $this->decodeExpr();
        return new Global_(
            $type,
            $init,
        );
    }

    private function decodeExport(): Export
    {
        $name = $this->decodeName();
        $desc = $this->decodeExportDesc();
        return new Export(
            $name,
            $desc,
        );
    }

    private function decodeElem(): Elem
    {
        $mode = $this->decodeU32();
        if ($mode === 0) {
            $offset = $this->decodeExpr();
            $initFuncRefs = $this->decodeVec($this->decodeFuncIdx(...));
            return new Elem(
                ValType::FuncRef,
                array_map(
                    fn ($funcRef) => [Instr::RefFunc($funcRef)],
                    $initFuncRefs,
                ),
                ElemMode::Active(0, $offset),
            );
        } elseif ($mode === 1) {
            $refType = $this->decodeElemKind();
            $initFuncRefs = $this->decodeVec($this->decodeFuncIdx(...));
            return new Elem(
                $refType,
                array_map(
                    fn ($funcRef) => [Instr::RefFunc($funcRef)],
                    $initFuncRefs,
                ),
                ElemMode::Passive(),
            );
        } elseif ($mode === 2) {
            $table = $this->decodeTableIdx();
            $offset = $this->decodeExpr();
            $refType = $this->decodeElemKind();
            $initFuncRefs = $this->decodeVec($this->decodeFuncIdx(...));
            return new Elem(
                $refType,
                array_map(
                    fn ($funcRef) => [Instr::RefFunc($funcRef)],
                    $initFuncRefs,
                ),
                ElemMode::Active($table, $offset),
            );
        } elseif ($mode === 3) {
            $refType = $this->decodeElemKind();
            $initFuncRefs = $this->decodeVec($this->decodeFuncIdx(...));
            return new Elem(
                $refType,
                array_map(
                    fn ($funcRef) => [Instr::RefFunc($funcRef)],
                    $initFuncRefs,
                ),
                ElemMode::Declarative(),
            );
        } elseif ($mode === 4) {
            $offset = $this->decodeExpr();
            $init = $this->decodeVec($this->decodeExpr(...));
            return new Elem(
                ValType::FuncRef,
                $init,
                ElemMode::Active(0, $offset),
            );
        } elseif ($mode === 5) {
            $refType = $this->decodeRefType();
            $init = $this->decodeVec($this->decodeExpr(...));
            return new Elem(
                $refType,
                $init,
                ElemMode::Passive(),
            );
        } elseif ($mode === 6) {
            $table = $this->decodeTableIdx();
            $offset = $this->decodeExpr();
            $refType = $this->decodeRefType();
            $init = $this->decodeVec($this->decodeExpr(...));
            return new Elem(
                $refType,
                $init,
                ElemMode::Active($table, $offset),
            );
        } elseif ($mode === 7) {
            $refType = $this->decodeRefType();
            $init = $this->decodeVec($this->decodeExpr(...));
            return new Elem(
                $refType,
                $init,
                ElemMode::Declarative(),
            );
        } else {
            throw new InvalidBinaryFormatException("code");
        }
    }

    private function decodeCode(): Code
    {
        $size = $this->decodeU32();
        $prevPos = $this->stream->tell();
        $compressedLocals = $this->decodeVec($this->decodeLocals(...));
        $body = $this->decodeExpr();
        if ($this->stream->tell() - $prevPos !== $size) {
            throw new InvalidBinaryFormatException("code size");
        }
        return new Code(
            $compressedLocals,
            $body,
        );
    }

    private function decodeData(): Data
    {
        $mode = $this->decodeU32();
        if ($mode === 0) {
            $offset = $this->decodeExpr();
            $init = $this->decodeVec($this->decodeByte(...));
            return new Data(
                $init,
                DataMode::Active(
                    0,
                    $offset,
                ),
            );
        } elseif ($mode === 1) {
            $init = $this->decodeVec($this->decodeByte(...));
            return new Data(
                $init,
                DataMode::Passive(),
            );
        } elseif ($mode === 2) {
            $memory = $this->decodeMemIdx();
            $offset = $this->decodeExpr();
            $init = $this->decodeVec($this->decodeByte(...));
            return new Data(
                $init,
                DataMode::Active(
                    $memory,
                    $offset,
                ),
            );
        } else {
            throw new InvalidBinaryFormatException("data");
        }
    }

    private function decodeImportDesc(): ImportDesc
    {
        return match ($this->decodeByte()) {
            0x00 => ImportDesc::Func($this->decodeTypeIdx()),
            0x01 => ImportDesc::Table($this->decodeTableType()),
            0x02 => ImportDesc::Mem($this->decodeMemType()),
            0x03 => ImportDesc::Global($this->decodeGlobalType()),
            default => throw new InvalidBinaryFormatException("importdesc"),
        };
    }

    private function decodeExportDesc(): ExportDesc
    {
        return match ($this->decodeByte()) {
            0x00 => ExportDesc::Func($this->decodeFuncIdx()),
            0x01 => ExportDesc::Table($this->decodeTableIdx()),
            0x02 => ExportDesc::Mem($this->decodeMemIdx()),
            0x03 => ExportDesc::Global($this->decodeGlobalIdx()),
            default => throw new InvalidBinaryFormatException("exportdesc"),
        };
    }

    /**
     * @return ValType::FuncRef
     */
    private function decodeElemKind(): ValType
    {
        $b = $this->decodeByte();
        if ($b === 0x00) {
            return ValType::FuncRef;
        } else {
            throw new InvalidBinaryFormatException("elemkind");
        }
    }

    private function decodeLocals(): Locals
    {
        $count = $this->decodeU32();
        // @todo Provide a way to configure the limit.
        if (1024 < $count) {
            throw new InvalidBinaryFormatException("too many local variables");
        }
        $type = $this->decodeValType();
        return new Locals(
            $count,
            $type,
        );
    }

    private function decodeTypeIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeMemIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeFuncIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeTableIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeGlobalIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeLocalIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeLabelIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeDataIdx(): int
    {
        return $this->decodeU32();
    }

    private function decodeElemIdx(): int
    {
        return $this->decodeU32();
    }

    /**
     * @return list<Instr>
     */
    private function decodeExpr(): array
    {
        return $this->decodeInstrsUntil([Instrs\Control\End::class])[0];
    }

    private function decodeInstr(): Instr
    {
        switch ($op = $this->decodeByte()) {
            case 0x00: return Instr::Unreachable();
            case 0x01: return Instr::Nop();
            case 0x02:
                $blockType = $this->decodeBlockType();
                $body = $this->decodeInstrsUntil([Instrs\Control\End::class])[0];
                return Instr::Block($blockType, $body);
            case 0x03:
                $blockType = $this->decodeBlockType();
                $body = $this->decodeInstrsUntil([Instrs\Control\End::class])[0];
                return Instr::Loop($blockType, $body);
            case 0x04:
                $blockType = $this->decodeBlockType();
                [$thenBody, $delimiter] = $this->decodeInstrsUntil([Instrs\Control\End::class, Instrs\Control\Else_::class]);
                if ($delimiter instanceof Instrs\Control\End) {
                    return Instr::If_($blockType, $thenBody, []);
                }
                $elseBody = $this->decodeInstrsUntil([Instrs\Control\End::class])[0];
                return Instr::If_($blockType, $thenBody, $elseBody);
            case 0x05: return Instr::Else_();
            case 0x0B: return Instr::End();
            case 0x0C: return Instr::Br($this->decodeLabelIdx());
            case 0x0D: return Instr::BrIf($this->decodeLabelIdx());
            case 0x0E:
                $labelTable = $this->decodeVec($this->decodeLabelIdx(...));
                $defaultLabel = $this->decodeLabelIdx();
                return Instr::BrTable($labelTable, $defaultLabel);
            case 0x0F: return Instr::Return_();
            case 0x10: return Instr::Call($this->decodeFuncIdx());
            case 0x11:
                $type = $this->decodeTypeIdx();
                $funcTable = $this->decodeTableIdx();
                return Instr::CallIndirect($funcTable, $type);
            case 0x1A: return Instr::Drop();
            case 0x1B: return Instr::Select([]);
            case 0x1C: return Instr::Select($this->decodeVec($this->decodeValType(...)));
            case 0x20: return Instr::LocalGet($this->decodeLocalIdx());
            case 0x21: return Instr::LocalSet($this->decodeLocalIdx());
            case 0x22: return Instr::LocalTee($this->decodeLocalIdx());
            case 0x23: return Instr::GlobalGet($this->decodeGlobalIdx());
            case 0x24: return Instr::GlobalSet($this->decodeGlobalIdx());
            case 0x25: return Instr::TableGet($this->decodeTableIdx());
            case 0x26: return Instr::TableSet($this->decodeTableIdx());
            case 0x28: return Instr::I32Load(...$this->decodeMemArg());
            case 0x29: return Instr::I64Load(...$this->decodeMemArg());
            case 0x2A: return Instr::F32Load(...$this->decodeMemArg());
            case 0x2B: return Instr::F64Load(...$this->decodeMemArg());
            case 0x2C: return Instr::I32Load8S(...$this->decodeMemArg());
            case 0x2D: return Instr::I32Load8U(...$this->decodeMemArg());
            case 0x2E: return Instr::I32Load16S(...$this->decodeMemArg());
            case 0x2F: return Instr::I32Load16U(...$this->decodeMemArg());
            case 0x30: return Instr::I64Load8S(...$this->decodeMemArg());
            case 0x31: return Instr::I64Load8U(...$this->decodeMemArg());
            case 0x32: return Instr::I64Load16S(...$this->decodeMemArg());
            case 0x33: return Instr::I64Load16U(...$this->decodeMemArg());
            case 0x34: return Instr::I64Load32S(...$this->decodeMemArg());
            case 0x35: return Instr::I64Load32U(...$this->decodeMemArg());
            case 0x36: return Instr::I32Store(...$this->decodeMemArg());
            case 0x37: return Instr::I64Store(...$this->decodeMemArg());
            case 0x38: return Instr::F32Store(...$this->decodeMemArg());
            case 0x39: return Instr::F64Store(...$this->decodeMemArg());
            case 0x3A: return Instr::I32Store8(...$this->decodeMemArg());
            case 0x3B: return Instr::I32Store16(...$this->decodeMemArg());
            case 0x3C: return Instr::I64Store8(...$this->decodeMemArg());
            case 0x3D: return Instr::I64Store16(...$this->decodeMemArg());
            case 0x3E: return Instr::I64Store32(...$this->decodeMemArg());
            case 0x3F:
                $c = $this->decodeByte();
                if ($c !== 0) {
                    throw new InvalidBinaryFormatException("Unexpected value while decoding an instruction `memory.size`, expected 0, but got $c");
                }
                return Instr::MemorySize();
            case 0x40:
                $c = $this->decodeByte();
                if ($c !== 0) {
                    throw new InvalidBinaryFormatException("Unexpected value while decoding an instruction `memory.grow`, expected 0, but got $c");
                }
                return Instr::MemoryGrow();
            case 0x41: return Instr::I32Const($this->decodeS32());
            case 0x42: return Instr::I64Const($this->decodeS64());
            case 0x43: return Instr::F32Const($this->decodeF32());
            case 0x44: return Instr::F64Const($this->decodeF64());
            case 0x45: return Instr::I32Eqz();
            case 0x46: return Instr::I32Eq();
            case 0x47: return Instr::I32Ne();
            case 0x48: return Instr::I32LtS();
            case 0x49: return Instr::I32LtU();
            case 0x4A: return Instr::I32GtS();
            case 0x4B: return Instr::I32GtU();
            case 0x4C: return Instr::I32LeS();
            case 0x4D: return Instr::I32LeU();
            case 0x4E: return Instr::I32GeS();
            case 0x4F: return Instr::I32GeU();
            case 0x50: return Instr::I64Eqz();
            case 0x51: return Instr::I64Eq();
            case 0x52: return Instr::I64Ne();
            case 0x53: return Instr::I64LtS();
            case 0x54: return Instr::I64LtU();
            case 0x55: return Instr::I64GtS();
            case 0x56: return Instr::I64GtU();
            case 0x57: return Instr::I64LeS();
            case 0x58: return Instr::I64LeU();
            case 0x59: return Instr::I64GeS();
            case 0x5A: return Instr::I64GeU();
            case 0x5B: return Instr::F32Eq();
            case 0x5C: return Instr::F32Ne();
            case 0x5D: return Instr::F32Lt();
            case 0x5E: return Instr::F32Gt();
            case 0x5F: return Instr::F32Le();
            case 0x60: return Instr::F32Ge();
            case 0x61: return Instr::F64Eq();
            case 0x62: return Instr::F64Ne();
            case 0x63: return Instr::F64Lt();
            case 0x64: return Instr::F64Gt();
            case 0x65: return Instr::F64Le();
            case 0x66: return Instr::F64Ge();
            case 0x67: return Instr::I32Clz();
            case 0x68: return Instr::I32Ctz();
            case 0x69: return Instr::I32Popcnt();
            case 0x6A: return Instr::I32Add();
            case 0x6B: return Instr::I32Sub();
            case 0x6C: return Instr::I32Mul();
            case 0x6D: return Instr::I32DivS();
            case 0x6E: return Instr::I32DivU();
            case 0x6F: return Instr::I32RemS();
            case 0x70: return Instr::I32RemU();
            case 0x71: return Instr::I32And();
            case 0x72: return Instr::I32Or();
            case 0x73: return Instr::I32Xor();
            case 0x74: return Instr::I32Shl();
            case 0x75: return Instr::I32ShrS();
            case 0x76: return Instr::I32ShrU();
            case 0x77: return Instr::I32RotL();
            case 0x78: return Instr::I32RotR();
            case 0x79: return Instr::I64Clz();
            case 0x7A: return Instr::I64Ctz();
            case 0x7B: return Instr::I64Popcnt();
            case 0x7C: return Instr::I64Add();
            case 0x7D: return Instr::I64Sub();
            case 0x7E: return Instr::I64Mul();
            case 0x7F: return Instr::I64DivS();
            case 0x80: return Instr::I64DivU();
            case 0x81: return Instr::I64RemS();
            case 0x82: return Instr::I64RemU();
            case 0x83: return Instr::I64And();
            case 0x84: return Instr::I64Or();
            case 0x85: return Instr::I64Xor();
            case 0x86: return Instr::I64Shl();
            case 0x87: return Instr::I64ShrS();
            case 0x88: return Instr::I64ShrU();
            case 0x89: return Instr::I64RotL();
            case 0x8A: return Instr::I64RotR();
            case 0x8B: return Instr::F32Abs();
            case 0x8C: return Instr::F32Neg();
            case 0x8D: return Instr::F32Ceil();
            case 0x8E: return Instr::F32Floor();
            case 0x8F: return Instr::F32Trunc();
            case 0x90: return Instr::F32Nearest();
            case 0x91: return Instr::F32Sqrt();
            case 0x92: return Instr::F32Add();
            case 0x93: return Instr::F32Sub();
            case 0x94: return Instr::F32Mul();
            case 0x95: return Instr::F32Div();
            case 0x96: return Instr::F32Min();
            case 0x97: return Instr::F32Max();
            case 0x98: return Instr::F32CopySign();
            case 0x99: return Instr::F64Abs();
            case 0x9A: return Instr::F64Neg();
            case 0x9B: return Instr::F64Ceil();
            case 0x9C: return Instr::F64Floor();
            case 0x9D: return Instr::F64Trunc();
            case 0x9E: return Instr::F64Nearest();
            case 0x9F: return Instr::F64Sqrt();
            case 0xA0: return Instr::F64Add();
            case 0xA1: return Instr::F64Sub();
            case 0xA2: return Instr::F64Mul();
            case 0xA3: return Instr::F64Div();
            case 0xA4: return Instr::F64Min();
            case 0xA5: return Instr::F64Max();
            case 0xA6: return Instr::F64CopySign();
            case 0xA7: return Instr::I32WrapI64();
            case 0xA8: return Instr::I32TruncF32S();
            case 0xA9: return Instr::I32TruncF32U();
            case 0xAA: return Instr::I32TruncF64S();
            case 0xAB: return Instr::I32TruncF64U();
            case 0xAC: return Instr::I64ExtendI32S();
            case 0xAD: return Instr::I64ExtendI32U();
            case 0xAE: return Instr::I64TruncF32S();
            case 0xAF: return Instr::I64TruncF32U();
            case 0xB0: return Instr::I64TruncF64S();
            case 0xB1: return Instr::I64TruncF64U();
            case 0xB2: return Instr::F32ConvertI32S();
            case 0xB3: return Instr::F32ConvertI32U();
            case 0xB4: return Instr::F32ConvertI64S();
            case 0xB5: return Instr::F32ConvertI64U();
            case 0xB6: return Instr::F32DemoteF64();
            case 0xB7: return Instr::F64ConvertI32S();
            case 0xB8: return Instr::F64ConvertI32U();
            case 0xB9: return Instr::F64ConvertI64S();
            case 0xBA: return Instr::F64ConvertI64U();
            case 0xBB: return Instr::F64PromoteF32();
            case 0xBC: return Instr::I32ReinterpretF32();
            case 0xBD: return Instr::I64ReinterpretF64();
            case 0xBE: return Instr::F32ReinterpretI32();
            case 0xBF: return Instr::F64ReinterpretI64();
            case 0xC0: return Instr::I32Extend8S();
            case 0xC1: return Instr::I32Extend16S();
            case 0xC2: return Instr::I64Extend8S();
            case 0xC3: return Instr::I64Extend16S();
            case 0xC4: return Instr::I64Extend32S();
            case 0xD0: return Instr::RefNull($this->decodeRefType());
            case 0xD1: return Instr::RefIsNull();
            case 0xD2: return Instr::RefFunc($this->decodeFuncIdx());
            case 0xFC:
                switch ($this->decodeU32()) {
                    case 0: return Instr::I32TruncSatF32S();
                    case 1: return Instr::I32TruncSatF32U();
                    case 2: return Instr::I32TruncSatF64S();
                    case 3: return Instr::I32TruncSatF64U();
                    case 4: return Instr::I64TruncSatF32S();
                    case 5: return Instr::I64TruncSatF32U();
                    case 6: return Instr::I64TruncSatF64S();
                    case 7: return Instr::I64TruncSatF64U();
                    case 8:
                        $data = $this->decodeDataIdx();
                        if ($this->decodeByte() !== 0) {
                            throw new InvalidBinaryFormatException("memory init");
                        }
                        return Instr::MemoryInit($data);
                    case 9: return Instr::DataDrop($this->decodeDataIdx());
                    case 10:
                        if ($this->decodeByte() !== 0) {
                            throw new InvalidBinaryFormatException("memory copy");
                        }
                        if ($this->decodeByte() !== 0) {
                            throw new InvalidBinaryFormatException("memory copy");
                        }
                        return Instr::MemoryCopy();
                    case 11:
                        if ($this->decodeByte() !== 0) {
                            throw new InvalidBinaryFormatException("memory fill");
                        }
                        return Instr::MemoryFill();
                    case 12:
                        $from = $this->decodeElemIdx();
                        $to = $this->decodeTableIdx();
                        return Instr::TableInit($to, $from);
                    case 13: return Instr::ElemDrop($this->decodeElemIdx());
                    case 14:
                        $to = $this->decodeTableIdx();
                        $from = $this->decodeTableIdx();
                        return Instr::TableCopy($to, $from);
                    case 15: return Instr::TableGrow($this->decodeTableIdx());
                    case 16: return Instr::TableSize($this->decodeTableIdx());
                    case 17: return Instr::TableFill($this->decodeTableIdx());
                    default:
                        throw new InvalidBinaryFormatException("instr");
                }
                // no break
            default:
                throw new InvalidBinaryFormatException("Unexpected opcode $op while decoding an instruction");
        }
    }

    /**
     * @return array{0: U32, 1: U32}
     */
    private function decodeMemArg(): array
    {
        $align = $this->decodeU32();
        $offset = $this->decodeU32();
        return [$offset, $align];
    }

    private function decodeBlockType(): BlockType
    {
        $b = $this->stream->peekByte();
        if ($b === 0x40) {
            $this->stream->seek(1);
            return BlockType::ValType(null);
        } elseif (in_array($b, [0x7F, 0x7E, 0x7D, 0x7C, 0x7B, 0x70, 0x6F], true)) {
            return BlockType::ValType($this->decodeValType());
        } else {
            $type = $this->decodeS33();
            if ($type < 0) {
                throw new InvalidBinaryFormatException("blocktype");
            }
            return BlockType::TypeIdx($type);
        }
    }

    /**
     * @param list<class-string<Instr>> $delimiters
     * @return array{0: list<Instr>, 1: Instr}
     */
    private function decodeInstrsUntil(array $delimiters): array
    {
        $result = [];
        while (true) {
            $instr = $this->decodeInstr();
            if (in_array(get_class($instr), $delimiters, true)) {
                return [$result, $instr];
            }
            $result[] = $instr;
        }
    }

    /**
     * @template T
     * @param callable(): T $decoder
     * @return list<T>
     */
    private function decodeVec(callable $decoder): array
    {
        $count = $this->decodeU32();
        $result = [];
        for ($i = 0; $i < $count; $i++) {
            $result[] = $decoder();
        }
        return $result;
    }

    /**
     * @phpstan-impure
     */
    private function decodeByte(): int
    {
        return $this->stream->readByte();
    }

    private function decodeU32(): int
    {
        return $this->decodeUnsignedLeb128(32);
    }

    private function decodeUnsignedLeb128(int $maxBits): int
    {
        $result = 0;
        for ($shiftBits = 0; $shiftBits < $maxBits; $shiftBits += 7) {
            $b = $this->decodeByte();
            $leftBitsCount = $maxBits - $shiftBits;
            if ($leftBitsCount < 7) {
                if ((($b & 0b01111111) >> $leftBitsCount) !== 0) {
                    throw new InvalidBinaryFormatException("unsigned leb128 ($maxBits): too large");
                }
            }
            $result |= ($b & 0b01111111) << $shiftBits;
            if (($b & 0b10000000) === 0) {
                return $result;
            }
        }
        throw new InvalidBinaryFormatException("unsigned leb128 ($maxBits): too large");
    }

    private function decodeSignedLeb128(int $maxBits): int
    {
        $result = 0;
        for ($shiftBits = 0; $shiftBits < $maxBits; $shiftBits += 7) {
            $b = $this->decodeByte();
            $leftBitsCount = $maxBits - $shiftBits;
            if ($leftBitsCount < 7) {
                if (($b & (1 << ($leftBitsCount - 1))) === 0) {
                    if ((($b & 0b01111111) >> $leftBitsCount) !== 0) {
                        throw new InvalidBinaryFormatException("signed leb128 ($maxBits): too large");
                    }
                } else {
                    if ((($b & 0b01111111) >> $leftBitsCount) + 1 !== (1 << (7 - $leftBitsCount))) {
                        throw new InvalidBinaryFormatException("signed leb128 ($maxBits): too large");
                    }
                }
            }
            $result |= ($b & 0b01111111) << $shiftBits;
            if (($b & 0b10000000) === 0) {
                if (($b & 0b01000000) === 0) {
                    return $result;
                } else {
                    return $result | (~0 << ($shiftBits + 7));
                }
            }
        }
        throw new InvalidBinaryFormatException("signed leb128 ($maxBits): too large");
    }

    /**
     * @return S32
     */
    private function decodeS32(): int
    {
        return $this->decodeSignedLeb128(32);
    }

    /**
     * @return S33
     */
    private function decodeS33(): int
    {
        return $this->decodeSignedLeb128(33);
    }

    /**
     * @return S64
     */
    private function decodeS64(): int
    {
        return $this->decodeSignedLeb128(64);
    }

    /**
     * @return F32
     */
    private function decodeF32(): float
    {
        $buf = $this->stream->read(4);
        $result = unpack('V', $buf);
        if ($result === false) {
            throw new InvalidBinaryFormatException("f32");
        }
        assert(isset($result[1]) && is_int($result[1]));
        $i = $result[1];
        if (($i & 0b01111111100000000000000000000000) === 0b01111111100000000000000000000000) {
            $sign = ($i & 0b10000000000000000000000000000000) === 0 ? 1 : -1;
            $payload = $i & 0b00000000011111111111111111111111;
            $j = ($sign === 1 ? 0 : PHP_INT_MIN) | 0b0111111111110000000000000000000000000000000000000000000000000000 | ($payload << (52 - 23));
            $result = unpack('d', pack('q', $j));
            assert(isset($result[1]) && is_float($result[1]));
            return $result[1];
        } else {
            $result = unpack('g', $buf);
            assert(isset($result[1]) && is_float($result[1]));
            return $result[1];
        }
    }

    /**
     * @return F64
     */
    private function decodeF64(): float
    {
        $buf = $this->stream->read(8);
        $result = unpack('e', $buf);
        if ($result === false) {
            throw new InvalidBinaryFormatException("f64");
        }
        assert(isset($result[1]) && is_float($result[1]));
        return $result[1];
    }

    /**
     * @return Name
     */
    private function decodeName(): string
    {
        $bytes = $this->decodeVec($this->decodeByte(...));
        $name = $this->implodeUtf8BytesToString($bytes);
        if ($name === null) {
            throw new InvalidBinaryFormatException("name");
        }
        return $name;
    }

    /**
     * @param list<int> $bytes
     */
    private function implodeUtf8BytesToString(array $bytes): ?string
    {
        $s = '';
        $count = count($bytes);
        for ($i = 0; $i < $count; $i++) {
            if (($bytes[$i] & 0x80) === 0) {
                $code = $bytes[$i];
            } elseif (($bytes[$i] & 0xE0) === 0xC0) {
                if ($count <= $i + 1) {
                    return null;
                }
                $code = (($bytes[$i] & 0x1F) << 6) | ($bytes[$i + 1] & 0x3F);
                $i++;
            } elseif (($bytes[$i] & 0xF0) === 0xE0) {
                if ($count <= $i + 2) {
                    return null;
                }
                $code = (($bytes[$i] & 0x0F) << 12) | (($bytes[$i + 1] & 0x3F) << 6) | ($bytes[$i + 2] & 0x3F);
                $i += 2;
            } elseif (($bytes[$i] & 0xF8) === 0xF0) {
                if ($count <= $i + 3) {
                    return null;
                }
                $code = (($bytes[$i] & 0x07) << 18) | (($bytes[$i + 1] & 0x3F) << 12) | (($bytes[$i + 2] & 0x3F) << 6) | ($bytes[$i + 3] & 0x3F);
                $i += 3;
            } else {
                return null;
            }
            $s .= mb_chr($code, 'UTF-8');
        }
        return $s;
    }

    /**
     * @return 0|positive-int
     */
    private function countDataIndicesUsedInCode(Code $code): int
    {
        $result = array_reduce(
            $code->body,
            fn ($acc, $instr) => $acc + match ($instr::class) {
                Instrs\Memory\DataDrop::class => 1,
                Instrs\Memory\MemoryInit::class => 1,
                default => 0,
            },
            0,
        );
        assert(is_int($result), '$result is guaranteed not to exceed the maximum value of an integer because the number of instructions in $code is limited');
        assert(0 <= $result, '$result is guaranteed to be non-negative because it is the sum of non-negative integers');
        return $result;
    }
}
