# Waddiwasi

This is a WebAssembly runtime written in pure PHP.



# Examples

## PHP on Wasm

The PHP runtime can be compiled to WebAssembly binary. This Wasm runtime can execute it. Currently, "Hello, World!" program works on the PHP runtime on the Wasm runtime.

```
$ php -d zend.assertions=-1 -d memory_limit=512M -d opcache.enable_cli=on -d opcache.jit=on -d opcache.jit_buffer_size=1G examples/php-on-wasm/php-wasm.php
```



# License

See [LICENSE](./LICENSE).
