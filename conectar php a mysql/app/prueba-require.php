<?php 

echo "Empieza el c�digo de la prueba'. Lorem ipsum dolor sit amet consectetur adipisicing elit.";

// include 'prueba-vista.php'; 
//Warning, cuando el archivo "incluido" no es importante
require 'prueba-vista.php'; 
//Fatal error, cuando el archivo es indispensable, sino el resto de la p�gina no deberia visualizarse

echo "111111Sigue el c�digo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus est natus eum ut magni harum vitae sunt at quisquam officia voluptate nesciunt tenetur, praesentium facilis asperiores illo dignissimos neque! Magnam.";

require 'prueba-vista.php';
//Equivalente a copiar y pegar todo el c�digo del documento prueba-vista.php: 
// <!DOCTYPE html>
// <html>
// <body>
// 	<h1>Esto es un titular del vista.php</h1>
//     <p>Esto es un parrafo del vista</p>
// </body>
// </html>

echo "222222Sigue el c�digo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus est natus eum ut magni harum vitae sunt at quisquam officia voluptate nesciunt tenetur, praesentium facilis asperiores illo dignissimos neque! Magnam.";

/*
include y require hacen lo mismo, pero con include el resto de la p�gina se ejecuta, con require es obligatorio que se realice bien para que el resto del c�digo de la p�gina se ejecute
*/
?>