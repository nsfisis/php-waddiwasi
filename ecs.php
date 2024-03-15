<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer;

return function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/examples',
    ]);
    $ecsConfig->sets([
        SetList::CLEAN_CODE,
        SetList::PSR_12,
    ]);
    $ecsConfig->rule(NativeFunctionInvocationFixer::class);
    $ecsConfig->ruleWithConfiguration(GlobalNamespaceImportFixer::class, [
        'import_classes' => true,
        'import_constants' => true,
        'import_functions' => true,
    ]);
};
