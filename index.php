<?php 

function dataType($watIs) {
    return 'De waarde is ' . gettype($watIs) . PHP_EOL;
}

echo dataType('Hallo');
echo dataType(true);
echo dataType(sqrt(-3));
echo dataType(20);
echo dataType(['appel', 'banaan', 'citroen']);