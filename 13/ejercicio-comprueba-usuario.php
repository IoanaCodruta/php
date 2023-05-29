<?php
session_start(); //Continua sesi�n

// Verificar si el nombre de usuario existe en la sesi�n
if (isset($_SESSION['nombreUsuario']) && isset($_POST['comprobarUsuario'])) {
    $comprobarUsuario = $_POST['comprobarUsuario'];
    // Comprobar si el usuario es correcto
    if ($_SESSION['nombreUsuario'] === $comprobarUsuario) {
        echo "�Bienvenido, $comprobarUsuario !";
    } else {
        echo "Usuario incorrecto.";
    }
} else {
    echo "Por favor, inicia sesi�n";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comprobar Usuario</title>
    <link rel="stylesheet" href="ejercicio-sesion.css">
</head>
<body>
    <h1>Comprobar Usuario</h1>
    <form method="POST" action="">
        <label>Ingrese su nombre de usuario:</label>
        <input type="text" name="comprobarUsuario" required>
        <button type="submit">Iniciar sesi�n</button>
    </form>
    <form method="POST" action="ejercicio-cierra-sesion.php">
        <button type="submit">Cerrar sesi�n</button>
    </form>
    <a href="ejercicio-formulario-usuario.php"><button>Registrar</button></a>
</body>
</html>