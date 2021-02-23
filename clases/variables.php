<?php
//Variables
$integer = 1;
$float = 1.5;
$isTrue = false;
$arrayColores = array('Azul', 'Morado', 'Negro');
$string ="Hola";

echo $integer;
echo $float;
if ($isTrue) {
  echo $arrayColores[0];
  echo $string;
  echo "Verdadero";
}

//Variables globales y locales
function variablesGlobales(){
  $local = "Soy la variable local";
  echo $GLOBALS["global"];
  echo $local;
}

$global = "Soy la variable global";
variablesGlobales();

 ?>
