<?php
//Operadores lógicos
//Operador Y &&
$bool = (15 == 5) && (15 == 15);
//var_dump($bool);

//Operador O ||
$bool = (15 == 5) || (15 == 15);
//var_dump($bool);

//Operador XOR
$bool = (15 == 15) XOR (5 == 15);
//var_dump($bool);

//Operador NOT
$bool =! (15 == 15);
//var_dump($bool);

//A partir de aquí es importante el uso de los parentesis
//Operador AND
$bool = ((15 == 5) AND (15 == 15));
//var_dump($bool);

//Operador OR
$bool = ((15 == 5) OR (15 == 15));
var_dump($bool);

 ?>
