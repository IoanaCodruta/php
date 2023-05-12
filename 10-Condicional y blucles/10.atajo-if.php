<?php 

$edad = 18;
// $edad = NULL;
//Atajo IF u operador ternario
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

###Nueva función isset($edad) pregunta si la variable $edad tiene valor y no es nula.

// if (isset($edad)) {
// 	$edad = $edad;
// } else {
// 	$edad = 'El usuario no establecio su edad';
// }

echo 'Edad: ' . $edad;

?>