<?php
/**
 * @package    algorithm
 * @category   algorithm
 * @author     Jorge Meireles
 * @copyright  (c) 2015 Jovago
 */



$bar = [];
$find = 9999999;
for ($i = 0; $i <= $find; $i++) {
    $bar[] = $i;
}
$start = microtime(true);
if (binarySearch($find, $bar)) {
    echo "found";
}
var_dump(microtime(true) - $start);
$start = microtime(true);
if (binarySearch($find, $bar)) {
    echo "found";
}
var_dump(microtime(true) - $start);
