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
	<title>Cerrar sesi�n</title>
</head>
<body>
    <p>Has cerrado sesi�n</p>
    <p><?php echo $_SESSION['nombre']; ?></p>
    <a href="pagina2.php">Volver a pagina2.php</a>

</body>
</html>
