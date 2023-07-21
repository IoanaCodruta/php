<?php 

// Conexion a la base de datos
try {
    $conexion = new PDO('mysql:host=localhost;dbname=proyectopokedex', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    die();
}
// Operaci�n UPDATE - Actualizar informaci�n de un Pok�mon
if (isset($_POST["update"])) {
    $id_entrenador = $_POST["id_entrenador"];
    $nombre = $_POST["nombre"];
    $nivel = $_POST["nivel"];

    $sql = "UPDATE entrenador SET nombre=?, nivel=? WHERE id_entrenador=?";

    $stmt = $conexion->prepare($sql);
    $stmt->execute([$nombre, $nivel, $id_entrenador]);

    echo "Informaci�n del Pok�mon actualizada exitosamente.";
}
// Cerrar la conexi�n a la base de datos
$conexion = null;
?>



<!DOCTYPE html>
<html>
<head>
    <style>
        body {
    background-color: #e8e8e8;
    font-family: Arial, sans-serif;
}

h2 {
    text-align: center;
    color: #00CED1; /* Color azul turquesa */
}

table {
    width: 400px;
    margin: 0 auto;
    border-collapse: collapse;
    border: 2px solid #000000;
    background-color: #FFFFFF;
}

th {
    background-color: #4682B4; /* Color azul turquesa */
    color: #FFFFFF;
    padding: 10px;
}

td {
    border: 1px solid #000000;
    padding: 10px;
}

input[type="number"],
input[type="text"],
textarea {
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: auto;
    margin-top: 10px;
    padding: 5px 20px;
    background-color: #4682B4; /* Color azul turquesa */
    color: #FFFFFF;
    border: none;
    cursor: pointer;
}

/* Estilos adicionales para el estilo Pok�dex */
body {
    background-image: url('pokedex_bg.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

table {
    background-color: #5F9EA0;
}

th {
    background-color: #5F9EA0; /* Color azul turquesa */
}

input[type="submit"] {
    background-color: #00CED1; /* Color azul turquesa */
}




    </style>
</head>
<body>
    <h2>Actualizar informaci�n de entrenadores</h2>
    <table>
        <form action="" method="POST">
            <tr>
                <th>ID del Entrenador</th>
                <td><input type="number" name="id_entrenador" required></td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr>
                <th>Nivel</th>
                <td><input type="number" name="nivel" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="update" value="Actualizar"></td>
            </tr>
        </form>
    </table>

    
    <a href="/proyecto"><h3>Volver a POKEDEX</h3>
</body>
</html>