<?php 
try {
	
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
	//echo "Conexion correcta";

	// Metodo Query (metodo desaconsejado)
	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id BETWEEN 2 AND 4");

	foreach($resultados as $fila){
		echo $fila['nombre'] . " de la id: " . $fila['id'] . "tiene el correo: ". $fila['email'] . "<br />";
	}

} catch(PDOException $e){
	// Obtener errores
	echo "Error: " . $e->getMessage();
}

?>