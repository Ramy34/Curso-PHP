<?php
//Comillas dobles
//Concatenación
$palabra = "Código ";
//Forma 1
$union = $palabra . "Facilito";

//echo $union;

//Forma 2
$palabra .= "Facilito 2";
//echo $palabra;

//Interpolación
//Forma 1
//echo "Bienvenido a $palabra adiós";

//Forma 2
//echo "Bienvenido a {$palabra}2222 adiós";

//Con comillas dobles se pueden utilizar los caracteres escapados
/*
\n Avance de línea
\r Retorno de carro
\t Tabulador horizontal
\v Tabulador vertical
\e Escape
\f Avance de página
\\ Barra invertida
\$ Signo de dólar
\" Comillas dobles
*/

//echo "Hola mundo \n adiós";

//Comillas simples
//No interpolación
//echo '$palabra hola';
//echo 'Hola \n hola';
//echo 'I\m';
echo 'Mi directorio es D:\\Hola'

?>
