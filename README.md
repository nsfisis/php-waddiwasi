# Waddiwasi

This is a WebAssembly runtime written in pure PHP.

It is partially compatible with the WebAssembly specification version 2.0.



## Examples

### PHP on Wasm

The PHP runtime can be compiled to WebAssembly binary. This Wasm runtime can execute it. Currently, "Hello, World!" program works on the PHP runtime on the Wasm runtime.

```
$ php -d zend.assertions=-1 -d memory_limit=512M -d opcache.enable_cli=on -d opcache.jit=on -d opcache.jit_buffer_size=1G examples/php-on-wasm/php-wasm.php
```

### RubyVM on PHP on Wasm

https://github.com/m3m0r7/rubyvm-on-php is a RubyVM written in pure PHP.

It works on the PHP runtime on my Wasm runtime.

```
$ cd examples/rubyvm-on-php-on-wasm
$ ./HelloWorld.sh
```

NOTE: there is a known bug where `munmap()`-related errors are reported.



## Talks

[Talk in PHPerKaigi (in Japanese)](https://fortee.jp/phperkaigi-2024/proposal/bc5dc153-17af-4079-8f1b-2660af97e2c8)



## License

See [LICENSE](./LICENSE).
