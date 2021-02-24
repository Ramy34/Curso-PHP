<?php
//Array multidimensional o matriz
$personas = array(
  array("Juan", "Pérez", 22),
  array("Mario", "Bros", 31),
  array("Serena", "López", 14),
  array("Dawn", "Martínez", 99)
);
//Obtener un valor
$fila = 3;
$columna = 1;
echo $personas[$fila][$columna] . "\n";

//Recorrer un arreglo Multidimensional
for($fila = 0; $fila < count($personas); $fila++){
  for($columna = 0; $columna < count($personas[$fila]); $columna++ ){
    echo "Valor -> " . $personas[$fila][$columna] . "\n";
  }
}

//Multidimensional mixto
$barcos = array(
  'A' => array("Nada", "Nada", "Barco"),
  'B' => array("Nada", "Nada", "Nada"),
  'C' => array("Barco", "Nada", "Nada"),
  'D' => array("Nada", "Nada", "Barco")
);
//Obtener valor
echo $barcos['A'][2] . "\n";
//Recorrer el arreglo multidimensional mixto
foreach ($barcos as $clave => $valor) {
  echo "\n";
  for ($indice = 0; $indice < count($valor); $indice++) {
    echo "Coordenadas -> " . $clave . "-" . $indice . " Valor -> ". $valor[$indice] . " ";
  }
}
 ?>
