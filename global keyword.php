<?php
$x = 5;
$y = 10;

function Test() {
  global $x, $y;
  $y = $x + $y;
} 

Test();  //Avvia la funzione 
echo $y; // Stampa il valore della $y relativo alla funzione TEST 
?>