#include <stdio.h>
#include <emscripten.h>
#include <Zend/zend_execute.h>
#include <sapi/embed/php_embed.h>

int EMSCRIPTEN_KEEPALIVE php_wasm_run(const char* code) {
    zend_result result;

    int argc = 1;
    char* argv[] = { "php.wasm", NULL };

    PHP_EMBED_START_BLOCK(argc, argv);

    result = zend_eval_string_ex(code, NULL, "php.wasm code", 1);

    PHP_EMBED_END_BLOCK();

    fflush(stdout);
    fflush(stderr);

    return result == SUCCESS ? 0 : 1;
}
