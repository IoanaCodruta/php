<?php 

	$errores = '';
	$enviado = false;

	//Si hemos hecho clic sobre el bot�n de BUSCAR:
	if (isset($_POST['submit'])) {
		//Guardaremos el valor asignado por el usuario de la id en la variable $id
		$codigo = $_POST['codigo'];
		//Error si no hay "codigo" seleccionada
		if (empty($codigo)) {
			$errores .= 'Por favor selecciona un c�digo';
		}
		//Si han dado una codigo, cambiamos el $enviado a true, es decir, se enviar� el formulario 
		if(!$errores){
			$enviado = true;
		}
	}

	require 'ejercicio-select-index-view.php';

	//A partir del envio del formulario, se conecta y envia  a la base de datos esa ID
	if ($enviado){
		try {
			//Conectamos con la API PDO a las BBDD
			$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');

			//Buscar datos del formulario "READ" SQL
			$statement = $conexion->prepare('SELECT * FROM clientes WHERE C�DIGOCLIENTE = :codigo');
			$statement->execute(
				array(':codigo'=> $codigo)
			);
			//Otro paquete de informaci�n en un array del registro de la ID seleccionada por el formulario
			$resultados = $statement->fetch();

			//Como mostramos los datos
			if($resultados){
				echo "<p class='resultado'> Resultado de la b�squeda:</br> ";
				echo "ID:" . $resultados['C�DIGOCLIENTE'] . ' </br> ' . "NOMBRE:" .$resultados['EMPRESA']. ' </br> ' . "DIRECCI�N:" .$resultados['DIRECCI�N']. ' </br> ' . "POBLACI�N:" .$resultados['POBLACI�N'] ;
				echo "</p>";

			} 
			//Si no hay datos en la tabla cliente
			else {
				echo "<p style='text-align:center' class='resultado'>No existe este cliente $codigo</p>";
			}	

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}

?>