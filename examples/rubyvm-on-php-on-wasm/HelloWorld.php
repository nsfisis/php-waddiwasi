<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

// Instantiate RubyVM class
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
