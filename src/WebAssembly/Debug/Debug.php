<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Debug;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDescs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Mut;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class Debug
{
    public static function printImports(Module $module): void
    {
        foreach ($module->imports as $import) {
            $mod = $import->module;
            $name = $import->name;
            $desc = $import->desc;
            $type = match ($desc::class) {
                ImportDescs\Func::class => 'func',
                ImportDescs\Table::class => 'table',
                ImportDescs\Mem::class => 'mem',
                ImportDescs\Global_::class => 'global',
                default => 'unknown',
            };
            $extraInfo = match ($desc::class) {
                ImportDescs\Func::class => self::typeIdxToString($desc->func, $module),
                ImportDescs\Table::class => self::tableTypeToString($desc->table),
                ImportDescs\Mem::class => self::memTypeToString($desc->mem),
                ImportDescs\Global_::class => self::globalTypeToString($desc->global),
                default => 'unknown',
            };
            echo "{$mod}::{$name}: {$type} {$extraInfo}\n";
        }
    }

    private static function typeIdxToString(int $idx, Module $module): string
    {
        $type = $module->types[$idx];
        return self::funcTypeToString($type);
    }

    private static function tableTypeToString(TableType $type): string
    {
        return self::valTypeToString($type->refType) . ' ' . self::limitsToString($type->limits);
    }

    private static function memTypeToString(MemType $type): string
    {
        return self::limitsToString($type->limits);
    }

    private static function globalTypeToString(GlobalType $type): string
    {
        return self::mutToString($type->mut) . ' ' . self::valTypeToString($type->valType);
    }

    private static function funcTypeToString(FuncType $type): string
    {
        $params = implode(', ', array_map(self::valTypeToString(...), $type->params));
        $results = implode(', ', array_map(self::valTypeToString(...), $type->results));
        return "({$params}) -> ({$results})";
    }

    private static function valTypeToString(ValType $type): string
    {
        return match ($type) {
            ValType::I32 => 'i32',
            ValType::I64 => 'i64',
            ValType::F32 => 'f32',
            ValType::F64 => 'f64',
            ValType::V128 => 'v128',
            ValType::ExternRef => 'externref',
            ValType::FuncRef => 'funcref',
        };
    }

    private static function limitsToString(Limits $limit): string
    {
        $min = $limit->min;
        $max = $limit->max;
        return $max === null ? "[{$min}, inf)" : "[{$min}, {$max}]";
    }

    private static function mutToString(Mut $mut): string
    {
        return match ($mut) {
            Mut::Const => 'const',
            Mut::Var => 'var',
        };
    }
}
