<?php
$servername = "localhost";
$username = "pepito";
$password = "menganito";
$database = "prueba_examen";

// Crear conexi�n
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexi�n
if ($conn->connect_error) {
    die("Error de conexi�n: " . $conn->connect_error);
}

// Realizar operaciones con la base de datos...

// Cerrar conexi�n
$conn->close();
?>
