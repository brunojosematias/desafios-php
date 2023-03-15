<?php

$valor = readline();

$notas = [100, 50, 20, 10, 5, 2, 1];

echo $valor . "\n";

foreach($notas as $nota) {
  $quanatidadeDeNotas = 0;
  
  while($valor >= $nota) {
    $quanatidadeDeNotas += 1;

    $valor -= $nota; 
  }

  echo $quanatidadeDeNotas . " nota(s) de R$ " . $nota . ",00\n";
}

?>