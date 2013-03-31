<?php
$size = pow(2, 16);

// Attack hash
// This takes significantly longer than the 2nd loop
$startTime = microtime(true);
$array = array();
for ($key = 0, $maxKey = ($size - 1) * $size; $key <= $maxKey; $key += $size) {
    $array[$key] = 0;
}
$endTime = microtime(true);
echo PHP_EOL;
printf('inserting %d elements requires: %s seconds. ', $size, ($endTime - $startTime));

$startTime = microtime(true);
$array = array();
for ($key = 0, $maxKey = $size - 1; $key <= $maxKey; ++$key) {
    $array[$key] = 0;
}
$endTime = microtime(true);
echo PHP_EOL;
printf('inserting %d elements requires: %s seconds. ', $size, ($endTime - $startTime));
