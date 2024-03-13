timestamp="$(date '+%Y%m%d-%H%M')"
# php -d 'error_reporting=E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED' vendor/bin/reli inspector:trace -o traces/"$timestamp".log -- php -d memory_limit=256M -d opcache.enable_cli=on -d opcache.jit=on -d opcache.jit_buffer_size=1G examples/php-on-wasm/php-wasm.php 2> traces/"$timestamp".stderr.log
# vendor/bin/reli converter:flamegraph < traces/"$timestamp".log > traces/"$timestamp".svg

php -d memory_limit=256M -d opcache.enable_cli=on -d opcache.jit=on -d opcache.jit_buffer_size=1G examples/php-on-wasm/php-wasm.php 2> traces/"$timestamp".stderr.log
