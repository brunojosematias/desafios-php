<?php

$x = abs(readline());
$y = abs(readline());

$soma = 0;

if ($x < $y) {
  $aux = $y;
  $y = $x;
  $x = $aux;
}

for (; $y <= $x; $y++) {

  if ($y % 2 === 1) {
    $soma += $y;
  }
}

echo $soma;

?>