<?php
//Array Indexado

$color = "Morado";
$arrayIndexado = array(1, 2, "Hola", $color);

//Obtenee un valor
echo $arrayIndexado[3] . "\n";

//Recorrer el array indexado
for($i = 0; $i < count($arrayIndexado); $i++){
  echo $arrayIndexado[$i] . "\n";
}

//Array asociativo 'Clave' => 'Valor'
$arrayAsosiativo = array('Nombre' => 'Ramsés', 'Color' => 'Morado', 'Saludo' => 'Hola');

//Obtener un valor
echo $arrayAsosiativo['Nombre'] . "\n";

//Recorrer el array asosiativo
foreach($arrayAsosiativo as $clave => $valor){
  echo "Clave $clave ---- Valor $valor \n";
}
 ?>
