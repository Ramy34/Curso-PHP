<?php 
//Devolución de valores en una función

function resta($num){
    return $num-10;
}

echo resta(40);

//Valores predeterminados
function hacer_cafe($tipo = "Capuchino"){
return "El café es de $tipo.\n";
}

echo hacer_cafe();
echo hacer_cafe(null);
echo hacer_cafe("moka");

function persona($nombre = "Fulanito", $apellido = "García", $edad = 15){
    return "Bienvenido $nombre $apellido de $edad años.\n";
}

echo persona("José", "Mendez");

//Funciones con arreglos como parámetros
function animales($animales = array("sin dato", "sin dato"), $tipo = "sin tipo"){
    return "Los animales son ".implode(",", $animales)." $tipo.\n";
}

echo animales();
echo animales(array("gato", "tigre"), "felinos");

//Devolver múltiples valores
function flores(){
    $flor = "Clavel";
    $color = "Morado";
    $cantidad = 10;
    return array($flor, $color, $cantidad);
}

list($fl, $co, $can) = flores();

echo "Hola soy un $fl, mi color es $co y somos $can.\n";

?>