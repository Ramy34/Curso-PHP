<?php 
//Funciones variables y anónimas
$saludo = function($nombre){
    echo $nombre;
};

//$saludo("Luis");

$suma = function($num1, $num2){
    return $num1 + $num2;
};

//echo $suma(4, 6);

//Funciones variables
function saludo($saludo){
    echo "Soy la variable función $saludo.\n";
}

$variable = 'saludo';
echo $variable("Hola");

//Funciones internas de php
if(function_exists('array_filter')){
    echo "La función existe.\n";
}else{
    echo "La función no existe.\n";
}

//Nos obtiene la lista de funciones relacinadas al argumento
print_r(get_extension_funcs("xml"));

?>