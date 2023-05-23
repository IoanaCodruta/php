<?php 

function suma($numero, $numero2){
	return $numero + $numero2;
}

// include 'vista.php'; //Warning, cuando el archivo "incluido" no es importante
// require 'vista.php'; //Falta error, cuando el archivo es indispensable, sino el resto de la p�gina no deberia visualizarse

###INLCUDE o REQUIRE es equivalente a poner todo el c�digo dentro de vista.php

// <!DOCTYPE html>
// <html lang="en">
// <head>
// 	<title>Vista de PHP</title>
// </head>
// <body>
//		C�digo
// </body>
// </html>

include_once 'vista.php'; //Solo una vez
// require_once 'vista.php'; //Solo una vez

/*
include y require hacen lo mismo, 
pero con include el resto de la p�gina se ejecuta, 
con require es obligatorio que se realice bien para que el resto del c�digo de la p�gina se ejecute
*/
echo '<b>Hola</b>'; //Final del c�digo

include_once 'vista.php' //Solo una vez

###EJERCICIO crear un index.php y view.php para a�adir la l�gica de una funci�n de c�lculo del �rea del hexagono y en la vista que muestre un p�rrafo "El restultado del �rea del hexagono es: valor de una variable "lado"  y un h1 con "C�lculo del �rea del Hex�gono"

?>