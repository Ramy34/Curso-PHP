<?php
//Constantes
//Utilizando const
const CONSTANTE = 'Soy una constante';
const NUMEROS = 1;
const COLORES = array('Amarillo', 'Azul', 'Rojo');

echo CONSTANTE;
echo NUMEROS;
echo COLORES[1];

//Utilizando define
define('CONSTANTE2', "Hola Mundo");
define('COLORES2', array('Amarillo', 'Verde', 'Morado'));

echo CONSTANTE2;
echo COLORES2[2];

//Constantes predefinidas nuevas en php 7
echo PHP_INT_MIN;
echo PHP_FLOAT_DIG;
echo PHP_FLOAT_EPSILON;
echo PHP_FLOAT_MIN;
echo PHP_FLOAT_MAX;
echo PHP_FD_SETSIZE;

//php.net/manual/es/language.constants.predefined.php
 ?>
