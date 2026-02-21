<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Validation;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\DataModes;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ElemModes;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ExportDescs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Func;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDescs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Mut;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use function array_fill;
use function array_map;
use function array_merge;
use function count;
use function in_array;

final class Validator
{
    /**
     * @var list<string>
     */
    private array $errors = [];

    public function __construct(
        private readonly Module $module,
    ) {
    }

    public function validate(): ValidationResult
    {
        try {
            $this->validateModule();
            return new ValidationResult($this->errors);
        } catch (ValidationFailureException $e) {
            return new ValidationResult([...$this->errors, $e->getMessage()]);
        }
    }

    private function validateModule(): void
    {
        $importFuncTypes = [];
        $importTableTypes = [];
        $importMemTypes = [];
        $importGlobalTypes = [];
        foreach ($this->module->imports as $import) {
            $desc = $import->desc;
            if ($desc instanceof ImportDescs\Func) {
                if (isset($this->module->types[$desc->func])) {
                    $importFuncTypes[] = $this->module->types[$desc->func];
                } else {
                    $this->addError("Invalid import function type index: {$desc->func}");
                    $importFuncTypes[] = new FuncType([], []);
                }
            } elseif ($desc instanceof ImportDescs\Table) {
                $importTableTypes[] = $desc->table;
            } elseif ($desc instanceof ImportDescs\Mem) {
                $importMemTypes[] = $desc->mem;
            } elseif ($desc instanceof ImportDescs\Global_) {
                $importGlobalTypes[] = $desc->global;
            }
        }

        $c = new Context(
            types: $this->module->types,
            funcs: array_merge(
                $importFuncTypes,
                array_map(
                    fn (Func $f) => $this->module->types[$f->type] ?? new FuncType([], []),
                    $this->module->funcs,
                ),
            ),
            tables: array_merge(
                $importTableTypes,
                array_map(fn ($t) => $t->type, $this->module->tables),
            ),
            mems: array_merge(
                $importMemTypes,
                array_map(fn ($m) => $m->type, $this->module->mems),
            ),
            globals: array_merge(
                $importGlobalTypes,
                array_map(fn ($g) => $g->type, $this->module->globals),
            ),
            elems: array_map(fn ($e) => $e->type, $this->module->elems),
            datas: array_fill(0, count($this->module->datas), true),
            locals: [],
            labels: [],
            return: [],
            refs: $this->collectRefs(),
        );

        $c_ = new Context(
            types: $c->types,
            funcs: $c->funcs,
            tables: $c->tables,
            mems: $c->mems,
            globals: $importGlobalTypes,
            elems: $c->elems,
            datas: $c->datas,
            locals: $c->locals,
            labels: $c->labels,
            return: $c->return,
            refs: $c->refs,
        );

        $this->validateTypes();

        $this->validateFuncs($c);
        $this->validateTables($c);
        $this->validateMems($c);
        $this->validateGlobals($c_);
        $this->validateElems($c_);
        $this->validateDatas($c_);

        $this->validateStart($c);
        $this->validateImports($c);
        $this->validateExports($c);

        $this->validateMemsCount($c);
        $this->validateExportsHaveDifferentNames();
    }

    private function validateTypes(): void
    {
        // Do nothing because function types are always valid.
    }

    private function validateFuncs(Context $c): void
    {
        foreach ($this->module->funcs as $func) {
            $this->validateFunc($c, $func);
        }
    }

    private function validateTables(Context $c): void
    {
        foreach ($this->module->tables as $table) {
            $this->validateTableType($table->type);
        }
    }

    private function validateTableType(TableType $tableType): void
    {
        $this->validateLimits($tableType->limits, 2 ** 32 - 1);
    }

    private function validateLimits(Limits $limits, int $k): void
    {
        $n = $limits->min;
        $m = $limits->max;
        $this->addErrorUnless($n <= $k, 'invalid limits');
        if ($m !== null) {
            $this->addErrorUnless($m <= $k, 'invalid limits');
            $this->addErrorUnless($n <= $m, 'invalid limits');
        }
    }

    private function validateMems(Context $c): void
    {
        foreach ($this->module->mems as $mem) {
            $this->validateMemType($mem->type);
        }
    }

    private function validateMemType(MemType $memType): void
    {
        $this->validateLimits($memType->limits, 2 ** 16);
    }

    private function validateGlobals(Context $c): void
    {
        foreach ($this->module->globals as $global) {
            $this->validateConstantExpr($global->init, $global->type->valType, $c);
        }
    }

    /**
     * @param list<Instr> $instrs
     */
    private function validateConstantExpr(array $instrs, ValType $expectedType, Context $c): void
    {
        if (count($instrs) !== 1) {
            $this->addError('constant expression required');
            return;
        }
        $instr = $instrs[0];
        $actualType = match ($instr::class) {
            Instrs\Numeric\F32Const::class => ValType::F32,
            Instrs\Numeric\F64Const::class => ValType::F64,
            Instrs\Numeric\I32Const::class => ValType::I32,
            Instrs\Numeric\I64Const::class => ValType::I64,
            Instrs\Reference\RefFunc::class => $this->validateConstRefFunc($instr, $c),
            Instrs\Reference\RefNull::class => $instr->type,
            Instrs\Variable\GlobalGet::class => $this->validateConstGlobalGet($instr, $c),
            default => null,
        };
        if ($actualType === null) {
            $this->addError('constant expression required');
            return;
        }
        if ($actualType !== $expectedType) {
            $this->addError('type mismatch');
        }
    }

    private function validateConstRefFunc(Instrs\Reference\RefFunc $instr, Context $c): ?ValType
    {
        if (! isset($c->funcs[$instr->func])) {
            $this->addError("unknown function {$instr->func}");
            return null;
        }
        return ValType::FuncRef;
    }

    private function validateConstGlobalGet(Instrs\Variable\GlobalGet $instr, Context $c): ?ValType
    {
        if (! isset($c->globals[$instr->var])) {
            $this->addError("unknown global {$instr->var}");
            return null;
        }
        $global = $c->globals[$instr->var];
        if ($global->mut !== Mut::Const) {
            $this->addError('constant expression required');
            return null;
        }
        return $global->valType;
    }

    private function validateElems(Context $c): void
    {
        foreach ($this->module->elems as $elem) {
            foreach ($elem->init as $initExpr) {
                $this->validateConstantExpr($initExpr, $elem->type, $c);
            }
            if ($elem->mode instanceof ElemModes\Active) {
                if (! isset($c->tables[$elem->mode->table])) {
                    $this->addError("unknown table {$elem->mode->table}");
                    continue;
                }
                if ($c->tables[$elem->mode->table]->refType !== $elem->type) {
                    $this->addError('type mismatch');
                }
                $this->validateConstantExpr($elem->mode->offset, ValType::I32, $c);
            }
        }
    }

    private function validateDatas(Context $c): void
    {
        foreach ($this->module->datas as $data) {
            if ($data->mode instanceof DataModes\Active) {
                if (! isset($c->mems[$data->mode->memory])) {
                    $this->addError("unknown memory {$data->mode->memory}");
                    continue;
                }
                $this->validateConstantExpr($data->mode->offset, ValType::I32, $c);
            }
        }
    }

    private function validateStart(Context $c): void
    {
        $start = $this->module->start;
        if ($start === null) {
            return;
        }
        $funcIdx = $start->func;
        if (! isset($c->funcs[$funcIdx])) {
            $this->addError("Invalid start function index: {$funcIdx}");
            return;
        }
        $funcType = $c->funcs[$funcIdx];
        $this->addErrorUnless(
            count($funcType->params) === 0 && count($funcType->results) === 0,
            'start function must have type [] -> []',
        );
    }

    private function validateImports(Context $c): void
    {
        foreach ($this->module->imports as $import) {
            $desc = $import->desc;
            if ($desc instanceof ImportDescs\Func) {
                $this->addErrorUnless(
                    isset($this->module->types[$desc->func]),
                    "Invalid import function type index: {$desc->func}",
                );
            } elseif ($desc instanceof ImportDescs\Table) {
                $this->validateTableType($desc->table);
            } elseif ($desc instanceof ImportDescs\Mem) {
                $this->validateMemType($desc->mem);
            } elseif ($desc instanceof ImportDescs\Global_) {
                // Global import types are always valid
            }
        }
    }

    private function validateExports(Context $c): void
    {
        foreach ($this->module->exports as $export) {
            $desc = $export->desc;
            if ($desc instanceof ExportDescs\Func) {
                $this->addErrorUnless(
                    isset($c->funcs[$desc->func]),
                    "Invalid export function index: {$desc->func}",
                );
            } elseif ($desc instanceof ExportDescs\Table) {
                $this->addErrorUnless(
                    isset($c->tables[$desc->table]),
                    "Invalid export table index: {$desc->table}",
                );
            } elseif ($desc instanceof ExportDescs\Mem) {
                $this->addErrorUnless(
                    isset($c->mems[$desc->mem]),
                    "Invalid export memory index: {$desc->mem}",
                );
            } elseif ($desc instanceof ExportDescs\Global_) {
                $this->addErrorUnless(
                    isset($c->globals[$desc->global]),
                    "Invalid export global index: {$desc->global}",
                );
            }
        }
    }

    private function validateMemsCount(Context $c): void
    {
        $this->addErrorUnless(
            count($c->mems) <= 1,
            'multiple memories are not allowed',
        );
    }

    private function validateExportsHaveDifferentNames(): void
    {
        $names = [];
        foreach ($this->module->exports as $export) {
            if (in_array($export->name, $names, true)) {
                $this->addError("Duplicate export name: {$export->name}");
            }
            $names[] = $export->name;
        }
    }

    private function validateFunc(Context $c, Func $func): void
    {
        $funcType = $this->module->types[$func->type] ?? null;
        if ($funcType === null) {
            $this->addError("Invalid function type index: {$func->type}");
            return;
        }

        $localTypes = array_merge(
            $funcType->params,
            array_map(fn ($l) => $l->type, $func->locals),
        );

        $funcContext = new Context(
            types: $c->types,
            funcs: $c->funcs,
            tables: $c->tables,
            mems: $c->mems,
            globals: $c->globals,
            elems: $c->elems,
            datas: $c->datas,
            locals: $localTypes,
            labels: [$funcType->results],
            return: $funcType->results,
            refs: $c->refs,
        );

        $validationStack = new ValidationStack();
        $validationStack->pushCtrl(Instrs\Control\Block::class, [], $funcType->results);

        $functionValidator = new FunctionValidator($funcContext, $validationStack);
        $errors = $functionValidator->validate($func->body);
        array_push($this->errors, ...$errors);
    }

    /**
     * Collect the set of function indices that are "declared" (appear in elem segment inits or exports).
     *
     * @return list<int>
     */
    private function collectRefs(): array
    {
        $refs = [];
        foreach ($this->module->elems as $elem) {
            foreach ($elem->init as $initExpr) {
                foreach ($initExpr as $instr) {
                    if ($instr instanceof Instrs\Reference\RefFunc) {
                        $refs[] = $instr->func;
                    }
                }
            }
        }
        foreach ($this->module->exports as $export) {
            if ($export->desc instanceof ExportDescs\Func) {
                $refs[] = $export->desc->func;
            }
        }
        return array_values(array_unique($refs));
    }

    private function addErrorUnless(bool $x, string $message): void
    {
        if (! $x) {
            $this->addError($message);
        }
    }

    private function addError(string $message): void
    {
        $this->errors[] = $message;
    }
}
