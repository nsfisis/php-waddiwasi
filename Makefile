.PHONY: prof
prof:
	@bash prof.sh

.PHONY: bench
bench:
	hyperfine --warmup=1 --style=nocolor 'make run' | tee benchmarks/$$(date '+%Y%m%d-%H%M').log

.PHONY: run
run:
	php -d zend.assertions=-1 -d memory_limit=512M -d opcache.enable_cli=on -d opcache.jit=on -d opcache.jit_buffer_size=1G examples/php-on-wasm/php-wasm.php

.PHONY: test
test:
	@bash test.sh
