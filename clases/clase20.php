<?php
//Funciones con argumento
function suma($num1, $num2){
  $suma = $num1 + $num2;
  echo "La suma es $suma \n";
}

suma(10, 15);

//arreglos
summa_array(array(10, 5));
function summa_array($entrada){
  $num1 = $entrada[0];
  $num2 = $entrada[1];
  echo "El resultado es: " . ($num1 + $num2) . "\n";
}

//Funciones por referencias
function resta(&$num){
  $num = 20 - $num;
}
$result = 13;
resta($result);
echo $result . "\n";

//Funciones recursivas
function recursividad($a){
  if ($a < 20){
    echo "$a\n";
    recursividad($a + 1);
  }
}
recursividad(1);
 ?>
