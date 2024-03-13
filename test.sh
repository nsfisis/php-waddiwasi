result=$(php -d zend.assertions=-1 -d memory_limit=256M -d opcache.enable_cli=on -d opcache.jit=on -d opcache.jit_buffer_size=1G examples/php-on-wasm/php-wasm.php 2>/dev/null)
if [[ "$result" == 'Hello, World!' ]]; then
  echo "Test passed"
  exit 0
else
  echo "Test failed"
  echo "$result"
  exit 1
fi
