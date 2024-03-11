.PHONY: run
run:
	php -d memory_limit=4G -d opcache.enable_cli=on -d opcache.jit=on -d opcache.jit_buffer_size=1G examples/php-on-wasm/php-wasm.php

.PHONY: test
test:
	@bash test.sh
