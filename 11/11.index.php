<?php 

function suma($numero, $numero2){
	return $numero + $numero2;
}

// include 'vista.php'; //Warning, cuando el archivo "incluido" no es importante
// require 'vista.php'; //Falta error, cuando el archivo es indispensable, sino el resto de la página no deberia visualizarse

###INLCUDE o REQUIRE es equivalente a poner todo el código dentro de vista.php

// <!DOCTYPE html>
// <html lang="en">
// <head>
// 	<title>Vista de PHP</title>
// </head>
// <body>
//		Código
// </body>
// </html>

include_once 'vista.php'; //Solo una vez
// require_once 'vista.php'; //Solo una vez

/*
include y require hacen lo mismo, 
pero con include el resto de la página se ejecuta, 
con require es obligatorio que se realice bien para que el resto del código de la página se ejecute
*/
echo '<b>Hola</b>'; //Final del código

include_once 'vista.php' //Solo una vez

###EJERCICIO crear un index.php y view.php para añadir la lógica de una función de cálculo del área del hexagono y en la vista que muestre un párrafo "El restultado del área del hexagono es: valor de una variable "lado"  y un h1 con "Cálculo del área del Hexágono"

?>