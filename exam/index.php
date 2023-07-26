<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuarios</title>
</head>
<body>
    <h2>Formulario de Usuarios</h2>
    <form action="guardar_usuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
