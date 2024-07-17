<?php

require_once __DIR__ . '/../../vendor/autoload.php';

\define('STDIN', fopen('php://stdin', 'r'));

$rubyVM = new \RubyVM\VM\Core\Runtime\RubyVM(
    new \RubyVM\VM\Core\Runtime\Option(
        reader: new \RubyVM\VM\Stream\BinaryStreamReader(
            streamHandler: new \RubyVM\VM\Stream\FileStreamHandler(
                __DIR__ . '/HelloWorld.yarv',
            ),
        ),
        logger: new \Psr\Log\NullLogger(),
    ),
);
$executor = $rubyVM->disassemble();
$executor->execute();
