<?php
//Condicionales
//If y else
$a = 15;
$b = 15;

if ($a < $b) {
  echo "a es menor ";
}else {
  echo "a es mayor ";
}

//Otra forma de escribir el if-else
if ($a < $b):
  echo "a es menor ";
else:
  echo "a es mayor ";
endif;

//elseif
if ($a < $b):
  echo "a es menor ";
  elseif($a == $b):
    echo "a y b son iguales ";
  else:
    echo "a es mayor ";
endif;

 ?>
