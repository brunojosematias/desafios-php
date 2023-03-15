<?php

$values = explode(" ", fgets(STDIN));

$biggerAB = ($values[0] + $values[1] + abs($values[0] - $values[1])) / 2;
$biggerNumber = ($biggerAB + $values[2] + abs($biggerAB - $values[2])) / 2;

echo "$biggerNumber eh o maior\n";

?>