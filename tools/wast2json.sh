#!/bin/bash

set -eux

if [[ -v WAST2JSON_PATH ]]; then
    wast2json="$WAST2JSON_PATH"
else
    wast2json=wast2json
fi

cd tests/fixtures/spec_testsuites/core
find . -name '*.wast' -print0 | xargs -0 -n 1 "$wast2json"
find . -name '*.wat' -print0 | xargs -0 rm -f
