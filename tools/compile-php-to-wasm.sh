#!/bin/bash

set -eux

cd examples/compile-php-to-wasm
docker build -t nsfisis-waddiwasi-php-wasm .
docker create --name nsfisis-waddiwasi-php-wasm-tmp-container nsfisis-waddiwasi-php-wasm
docker cp nsfisis-waddiwasi-php-wasm-tmp-container:/src/php-wasm.js .
docker cp nsfisis-waddiwasi-php-wasm-tmp-container:/src/php-wasm.wasm .
docker rm nsfisis-waddiwasi-php-wasm-tmp-container
