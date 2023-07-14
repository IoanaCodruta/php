<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('INSERT INTO usuarios (id, nombre, email, edad) VALUES (null, "Alex", "alex@gmail.com", "24" )');
	$statement->execute();


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>