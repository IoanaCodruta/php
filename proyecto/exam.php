<?php
$servername = "localhost";
$username = "pepito";
$password = "menganito";
$database = "prueba_examen";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Realizar operaciones con la base de datos...

// Cerrar conexión
$conn->close();
?>
