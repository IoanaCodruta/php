<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$codigo = $_POST['codigo'];
		$campo = $_POST['campo'];
		$canvi = $_POST['canvi'];
		echo $campo;

		//Error si no hay "c�digo" seleccionado
		if (empty($codigo)) {
			$errores .= 'Por favor selecciona un art�culo <br />';
		}

		//Error si no hay "campo" seleccionado
		if (empty($campo)) {
			$errores .= 'Por favor selecciona un campo <br />';
		}

		//Sanear el campo "nombre"
		if (!empty($canvi)) {
			$canvi = trim($canvi);
		} else {
			$errores .= 'Por favor escribe un cambio <br />';
		}

		if(!$errores){
			$enviado = 'true';
		}

	}

	require 'ej-update-index-view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		if ($campo=='SECCI�N'){
			//Actualizar campo secci�n
			$statement = $conexion->prepare('UPDATE productos SET SECCI�N=:canvi WHERE  C�DIGOART�CULO=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);

		} else if ($campo=='NOMBREART�CULO') {
			//Actualizar campo nombre
			$statement = $conexion->prepare('UPDATE productos SET NOMBREART�CULO=:canvi WHERE C�DIGOART�CULO=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);
		}  else {
			//Actualizar campo precio
			$statement = $conexion->prepare('UPDATE productos SET PRECIO=:canvi WHERE  C�DIGOART�CULO=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);
		}


	}


?>