<?php
session_start();
// session_destroy();

$_SESSION['nombre'] = 'Marc';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h1>P�gina de Inicio</h1>
	<p>Has cargado una nueva sesi�n</p>
	<a href="pagina2.php">Ir a la p�gina 2</a>
</body>
</html>