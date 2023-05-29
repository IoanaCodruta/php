<?php 

session_start();
echo $_SESSION['nombre'];
session_destroy();
echo $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cerrar sesión</title>
</head>
<body>
    <p>Has cerrado sesión</p>
    <p><?php echo $_SESSION['nombre']; ?></p>
    <a href="pagina2.php">Volver a pagina2.php</a>

</body>
</html>
