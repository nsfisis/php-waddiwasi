# Waddiwasi

This is a WebAssembly runtime written in pure PHP.

It is partially compatible with the WebAssembly specification version 2.0.



## Examples

### Hello, World!

```
$ composer example:hello-world
```


### PHP on Wasm

The PHP runtime can be compiled to WebAssembly binary. This Wasm runtime can execute it. Currently, "Hello, World!" program works on the PHP runtime on the Wasm runtime.

```
$ composer example:php-on-wasm
```


### RubyVM on PHP on Wasm

https://github.com/m3m0r7/rubyvm-on-php is a RubyVM written in pure PHP.

It works on the PHP runtime on my Wasm runtime.

```
$ composer install
$ composer example:rubyvm-on-php-on-wasm
```



## Talks

[Talk in PHPerKaigi (in Japanese)](https://fortee.jp/phperkaigi-2024/proposal/bc5dc153-17af-4079-8f1b-2660af97e2c8)



## License

See [LICENSE](./LICENSE).
