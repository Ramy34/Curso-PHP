<?php 
//Declaraciones de tipo escalar
//Activa el modo estricto
declare(strict_types = 1);
//Modo coercitivo
function suma(int $a, int $b){
    return $a + $b;
}

//var_dump(suma(1,5));

//Modo estricto
function resta(int $a, int $b){
    return $a - $b;
}

//var_dump(resta(7, 5));

function multi($a, $b): int{
    return $a * $b;
}

var_dump(multi(7, 5));

?>