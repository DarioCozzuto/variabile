<?php
function myTest() {
  static $x = 0;  //static consente alla variabile di non essere cancellata
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 