<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Debug;

use Nsfisis\Waddiwasi\Structure\Modules\ImportDescs;
use Nsfisis\Waddiwasi\Structure\Modules\Module;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\Structure\Types\Limits;
use Nsfisis\Waddiwasi\Structure\Types\MemType;
use Nsfisis\Waddiwasi\Structure\Types\Mut;
use Nsfisis\Waddiwasi\Structure\Types\NumType;
use Nsfisis\Waddiwasi\Structure\Types\RefType;
use Nsfisis\Waddiwasi\Structure\Types\ResultType;
use Nsfisis\Waddiwasi\Structure\Types\TableType;
use Nsfisis\Waddiwasi\Structure\Types\ValType;
use Nsfisis\Waddiwasi\Structure\Types\ValTypes;

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
            echo "$mod::$name: $type $extraInfo\n";
        }
    }

    private static function typeIdxToString(int $idx, Module $module): string
    {
        $type = $module->types[$idx];
        return self::funcTypeToString($type);
    }

    private static function tableTypeToString(TableType $type): string
    {
        return self::valTypeToString(ValType::RefType($type->refType)) . ' ' . self::limitsToString($type->limits);
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
        $params = self::resultTypeToString($type->params);
        $results = self::resultTypeToString($type->results);
        return "($params) -> ($results)";
    }

    private static function valTypeToString(ValType $type): string
    {
        return match ($type::class) {
            ValTypes\NumType::class => match ($type->inner) {
                NumType::I32 => 'i32',
                NumType::I64 => 'i64',
                NumType::F32 => 'f32',
                NumType::F64 => 'f64',
            },
            ValTypes\VecType::class => 'v128',
            ValTypes\RefType::class => match ($type->inner) {
                RefType::FuncRef => 'funcref',
                RefType::ExternRef => 'externref',
            },
            default => 'unknown',
        };
    }

    private static function limitsToString(Limits $limit): string
    {
        $min = $limit->min;
        $max = $limit->max;
        return $max === null ? "[$min, inf)" : "[$min, $max]";
    }

    private static function mutToString(Mut $mut): string
    {
        return match ($mut) {
            Mut::Const => 'const',
            Mut::Var => 'var',
        };
    }

    private static function resultTypeToString(ResultType $type): string
    {
        return implode(', ', array_map(self::valTypeToString(...), $type->types));
    }
}
