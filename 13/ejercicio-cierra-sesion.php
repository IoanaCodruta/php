<?php
session_start();

// Destruir todas las variables de sesi�n
$_SESSION = array();

// Destruir la sesi�n
session_destroy();

// Redireccionar al formulario de inicio de sesi�n o a otra p�gina de tu elecci�n
header("Location: ejercicio-formulario-usuario.php");
exit();
?>