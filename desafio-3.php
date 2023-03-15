<?php

$numX = readline();
$numY = readline();


if ($numX > $numY) {
 for ($Y = $numY + 1 ;$Y <= $numX - 1; $Y++) {
  if ($Y % 5 === 2 || $Y % 5 === 3) {
    echo $Y . "\n";    
  }
 }
}elseif($numX < $numY)  {
  for ($X = $numX + 1 ;$X <= $numY - 1; $X++) {
    if ($X % 5 === 2 || $X % 5 === 3) {
      echo $X . "\n";    
    }
  }
}

?>