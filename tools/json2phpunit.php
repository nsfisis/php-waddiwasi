<?php

declare(strict_types=1);

namespace Nsfsisis\Waddiwasi\Tools;

use function array_is_list;
use function array_keys;
use function array_map;
use function basename;
use function count;
use function explode;
use function fclose;
use function file_get_contents;
use function fopen;
use function fwrite;
use function glob;
use function implode;
use function is_array;
use function is_int;
use function is_null;
use function is_string;
use function json_decode;
use function strtr;
use function ucfirst;

$wastJsonBaseDir = __DIR__ . '/../tests/fixtures/spec_testsuites/core';
$phpUnitBaseDir = __DIR__ . '/../tests/src/SpecTestsuites/Core';

$wastJsonFiles = glob("$wastJsonBaseDir/*.json", GLOB_ERR);
if ($wastJsonFiles === false) {
    exit("Failed to list wast json files (base dir: $wastJsonBaseDir).\n");
}

foreach ($wastJsonFiles as $wastJsonFile) {
    $wastJsonFileContent = file_get_contents($wastJsonFile);
    if ($wastJsonFileContent === false) {
        exit("Failed to read wast json file (path: $wastJsonFile).\n");
    }
    $wastJson = json_decode($wastJsonFileContent, associative: true);
    if (!is_array($wastJson)) {
        exit("Failed to decode wast json file (path: $wastJsonFile).\n");
    }
    $sourceFilename = $wastJson['source_filename'] ?? null;
    $commands = $wastJson['commands'] ?? null;

    $className = wastJsonFileToPascalCase($wastJsonFile) . 'Test';

    $fp = fopen("$phpUnitBaseDir/$className.php", 'w');
    if ($fp === false) {
        exit("Failed to open file to write (path: $phpUnitBaseDir/$className.php).\n");
    }

    fwrite($fp, "<?php\n\n");
    fwrite($fp, "declare(strict_types=1);\n\n");
    fwrite($fp, "namespace Nsfisis\\Waddiwasi\\Tests\\SpecTestsuites\\Core;\n\n");
    fwrite($fp, "use Nsfisis\\Waddiwasi\\Tests\\SpecTestsuites\\SpecTestsuiteBase;\n");
    fwrite($fp, "use PHPUnit\\Framework\\Attributes\\Depends;\n");
    fwrite($fp, "use PHPUnit\\Framework\\Attributes\\DoesNotPerformAssertions;\n\n");
    fwrite($fp, "final class $className extends SpecTestsuiteBase\n");
    fwrite($fp, "{\n");

    $prevMethodName = null;
    foreach ($commands as $i => $command) {
        $type = $command['type'];
        $line = $command['line'];
        $methodName = 'test' . implode('', array_map(ucfirst(...), explode('_', $type))) . $i;

        $commandTest = match ($type) {
            'module' => buildModuleCommandTest($command),
            'assert_return' => buildAssertReturnCommandTest($command),
            'assert_trap' => buildAssertTrapCommandTest($command),
            'assert_malformed' => buildAssertMalformedCommandTest($command),
            'assert_invalid' => buildAssertInvalidCommandTest($command),
            'assert_exhaustion' => buildAssertExhaustionCommandTest($command),
            'assert_uninstantiable' => buildAssertUninstantiableCommandTest($command),
            'assert_unlinkable' => buildAssertUnlinkableCommandTest($command),
            'action' => buildActionCommandTest($command),
            'register' => buildRegisterCommandTest($command),
            default => exit("Unknown command type: $type\n"),
        };
        if ($commandTest === null) {
            fwrite($fp, "    #[DoesNotPerformAssertions]\n");
        }
        if ($prevMethodName !== null) {
            fwrite($fp, "    #[Depends('$prevMethodName')]\n");
        }
        fwrite($fp, "    public function $methodName(): void\n");
        fwrite($fp, "    {\n");

        if ($commandTest !== null) {
            fwrite($fp, "        \$this->{$commandTest['method']}(\n");
            foreach ($commandTest['args'] as $argName => $argValue) {
                $argValue = toPhpLiteral($argValue);
                fwrite($fp, "            $argName: $argValue,\n");
            }
            fwrite($fp, "            line: $line,\n");
            fwrite($fp, "        );\n");
        }

        fwrite($fp, "    }\n");
        if ($i !== count($commands) - 1) {
            fwrite($fp, "\n");
        }
        $prevMethodName = $methodName;
    }

    fwrite($fp, "}\n");
    fclose($fp);
}

function wastJsonFileToPascalCase(string $s): string
{
    $s = strtr(basename($s), ['.json' => '', '-' => '_']);
    return implode('', array_map(ucfirst(...), explode('_', $s)));
}

function buildModuleCommandTest(array $command): array
{
    return [
        'method' => 'runModuleCommand',
        'args' => [
            'filename' => $command['filename'],
            'name' => $command['name'] ?? null,
        ],
    ];
}

function buildAssertReturnCommandTest(array $command): array
{
    return [
        'method' => 'runAssertReturnCommand',
        'args' => [
            'action' => $command['action'],
            'expected' => $command['expected'],
        ],
    ];
}

function buildAssertTrapCommandTest(array $command): array
{
    return [
        'method' => 'runAssertTrapCommand',
        'args' => [
            'action' => $command['action'],
            'text' => $command['text'],
        ],
    ];
}

function buildAssertMalformedCommandTest(array $command): ?array
{
    $moduleType = $command['module_type'];
    if ($moduleType === 'text') {
        // Our interpreter does not support text format (.wat format).
        return null;
    }
    return [
        'method' => 'runAssertMalformedCommand',
        'args' => [
            'filename' => $command['filename'],
            'text' => $command['text'],
        ],
    ];
}

function buildAssertInvalidCommandTest(array $command): ?array
{
    $moduleType = $command['module_type'];
    if ($moduleType === 'text') {
        // Our interpreter does not support text format (.wat format).
        return null;
    }
    return [
        'method' => 'runAssertInvalidCommand',
        'args' => [
            'filename' => $command['filename'],
            'text' => $command['text'],
        ],
    ];
}

function buildAssertExhaustionCommandTest(array $command): array
{
    return [
        'method' => 'runAssertExhaustionCommand',
        'args' => [
            'action' => $command['action'],
            'text' => $command['text'],
        ],
    ];
}

function buildAssertUninstantiableCommandTest(array $command): ?array
{
    $moduleType = $command['module_type'];
    if ($moduleType === 'text') {
        // Our interpreter does not support text format (.wat format).
        return null;
    }
    return [
        'method' => 'runAssertUninstantiableCommand',
        'args' => [
            'filename' => $command['filename'],
            'text' => $command['text'],
        ],
    ];
}

function buildAssertUnlinkableCommandTest(array $command): ?array
{
    $moduleType = $command['module_type'];
    if ($moduleType === 'text') {
        // Our interpreter does not support text format (.wat format).
        return null;
    }
    return [
        'method' => 'runAssertUnlinkableCommand',
        'args' => [
            'filename' => $command['filename'],
            'text' => $command['text'],
        ],
    ];
}

function buildActionCommandTest(array $command): array
{
    return [
        'method' => 'runActionCommand',
        'args' => [
            'action' => $command['action'],
        ],
    ];
}

function buildRegisterCommandTest(array $command): array
{
    return [
        'method' => 'runRegisterCommand',
        'args' => [
            'name' => $command['name'] ?? null,
            'as' => $command['as'],
        ],
    ];
}

function toPhpLiteral(mixed $value): string
{
    if (is_null($value)) {
        return 'null';
    } elseif (is_int($value)) {
        return (string)$value;
    } elseif (is_string($value)) {
        $value = strtr($value, ["\\" => "\\\\", "'" => "\\'"]);
        return "'$value'";
    } elseif (is_array($value) && array_is_list($value)) {
        return '[' . implode(', ', array_map(toPhpLiteral(...), $value)) . ']';
    } elseif (is_array($value)) {
        return '[' . implode(', ', array_map(fn ($k) => "'$k' => " . toPhpLiteral($value[$k]), array_keys($value))) . ']';
    } else {
        return 'ERROR';
    }
}
