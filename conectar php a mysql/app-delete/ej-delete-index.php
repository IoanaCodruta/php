<?php 

	$mensaje = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$codigo = $_POST['codigo'];
        $enviado = 'true';
	}

	require 'ej-delete-index-view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=gestion', 'root', '');

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}

        //Eliminar datos del formulario
			$statement = $conexion->prepare('DELETE FROM CLIENTES_COPIA WHERE CÓDIGOCLIENTE= :codigo');
			$statement->execute(
				array(':codigo'=> $codigo)
			);
            
	}

?>