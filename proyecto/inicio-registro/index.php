<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['nombre'])) {
	header('Location: ../index.php');
	die();
} else {
	// Enviamos al usuario al formulario de registro
	header('Location: registrate.php');
}

?>