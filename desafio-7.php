<?php

$h1 = intval(readline("Que horas são?: "));
$m1 = intval(readline("Quantos minutos?: "));

$h2 = intval(readline("Que horas pretende acordar?: "));
$m2 = intval(readline("Quantos minutos?: "));

if (0 <= $h1 && $h1 <= 23 && 0 <= $m1 && $m1 <= 59 && 0 <= $h2 && $h2 <= 23 && 0 <= $m2 && $m2 <= 59) {

$dormir = (($h1 * 60) + $m1);
$acordar = (($h2 * 60) + $m2);

$sono = abs($dormir - $acordar);

echo "você vai ter $sono minutos de sono";
}
  
else {
  echo "horário não faz sentido 🤨";
}

?>