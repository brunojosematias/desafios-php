<?php

while (true) {
  $valores = explode(" ", fgets(STDIN));

  $M = $valores[0];
  $N = $valores[1];

  if ($M <= $N) {

    $aux = $N;
    $N = $M;
    $M = $aux;
    
  }


  if ($M <= 0 || $N <= 0) {
    break;
  }

  $soma = 0;

  $valoresSomados = "";

  while ($N <= $M) { 

    $valoresSomados .=  $N . " ";
    
    $soma += $N;

    $N += 1;
  }

  echo  $valoresSomados . "Sum=" . $soma . "\n";
  
}

?>