<?php
//Operadores de Comparación
$Numero1 = 13;
$Numero2 = 13;
$a = 14;
$b = 13;
$resultado;

//Operador igual == (Revisa el contenido, sin importar el tipo de dato)
echo "Hola soy el operador igual == ";
var_dump($Numero1 == $Numero2);

//Operador idéntico === (Revisa el tipo de dato y el contenido)
echo "Hola soy el operador igual === ";
var_dump($Numero1 === $Numero2);

//Operador diferente != o <>
echo "Hola soy el operador diferente != o <> ";
var_dump($Numero1 != $Numero2);
var_dump($Numero1 <> $Numero2);

//Operador no idéntico !==
echo "Hola soy el operador diferente !== ";
var_dump($Numero1 !== $Numero2);

//Operador mayor que >
echo "Hola soy el operador mayor que > ";
var_dump($a > $b);

//Operador menos que <
echo "Hola soy el operador menor que < ";
var_dump($a < $b);

//Operador mayor o igual que >=
echo "Hola soy el operador mayor o igual que >= ";
var_dump($a >= $b);

//Operador menor o igual que <=
echo "Hola soy el operador menor o igual que >= ";
var_dump($a <= $b);

//Operador de nave espacial <=>
echo "Hola soy el operador nave espacial <=> ";
var_dump($a <=> $b); //1
var_dump($b <=> $a); //-1
var_dump($b <=> $b); //0

//Operador de Elvis
echo "Hola soy el operador Elvis ?: ";
var_dump(isset($resultado) ?: 'No hay datos');

//Operador ternario
echo "Hola soy el operador ternario ?: ";
var_dump($resultado ? 'Soy verdadero' : 'Soy falso');

//Operador de fusión null
echo "Hola soy el operador fusión null ?? ";
var_dump(isset($resultado) ?? 'No hay dato');
 ?><
