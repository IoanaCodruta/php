<?php
session_start();//Inicia sesión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el nombre de usuario ingresado en el formulario
    $nombreUsuario = $_POST['nombreUsuario'];

    // Guardar el nombre de usuario en la sesión
    $_SESSION['nombreUsuario'] = $nombreUsuario;

    // Redireccionar a la página de comprobación
    header("Location: ejercicio-comprueba-usuario.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuario</title>
    <link rel="stylesheet" href="ejercicio-sesion.css">
</head>
<body>
    <h1>Ingrese su nombre de usuario:</h1>
    <form method="POST" action="">
        <input type="text" name="nombreUsuario" required>
        <button type="submit">Registrar usuario</button>
    </form>
    <p>Sesión cerrada</p>
</body>
</html>