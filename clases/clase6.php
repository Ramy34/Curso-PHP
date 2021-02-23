<?php
//Convresión a números enteros
//Contexto
$variable = "987654321";

$suma = 20 + $variable;

echo $suma;
echo gettype($suma);

//Forzado de tipo
$int = (int)$variable;
echo $int;
echo gettype($int);

//Función
$funcion = intval($variable);
echo $funcion;
echo gettype($funcion);

//Conversión a tipo float o double
//forzado de tipo
$numReal = (float)$variable;

echo $numReal;
echo gettype($numReal);

//Función
$funciaonReal = floatval($variable);

echo $funciaonReal;
echo gettype($funciaonReal);

//Conversión a tipo booleano
//Forzado de tipo y funcion
//0, 0.0, "", "0" caulaquier variable vacía será falso

$bool = (bool)$variable;
$boolean = (boolean)$variable;

$funcionBool = boolval($variable);

echo $bool;
echo $boolean;
echo $funcionBool;

//Convertir a tipo array
//Función

$numeros = "1,2,3,4";
$ArrayNumeros = explode(",", $numeros, 5);

echo $ArrayNumeros[0];
echo $ArrayNumeros[1];

//Tipo forzado

$array = (array)$variable;

echo $array[0];

$arrayColores = array('Azul','Rojo','Morado');
$string = implode(" ", $arrayColores);
echo $string;

 ?>
