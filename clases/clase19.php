<?php
//Funciones
function name(){
  echo "Hola soy una función";
}

$edad = 18;
if($edad <= 18){
  function party(){
    echo "Bienvenido a la fiesta";
  }
}
//Funciones dentro de funciones
function foo(){
  function bar(){
    echo "Hola ya existo";
  }
}
foo();
bar();
 ?>
