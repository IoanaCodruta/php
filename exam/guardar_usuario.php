<?php
$servername = "localhost";
$database = "mi_basedatos"; 
try {

    $conn = new PDO('mysql:host=localhost;dbname=mi_basedatos', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    // Insertar datos en la tabla "usuarios"
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo) VALUES (:nombre, :correo)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();

    echo "Datos guardados correctamente.";

} catch(PDOException $e) {
    die("Error de conexion: " . $e->getMessage());
}
?>
