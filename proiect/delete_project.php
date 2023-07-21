<?php
if (isset($_GET['id'])) {
    $projectId = $_GET['id'];

    // Conexiunea la baza de date ?i ?tergerea proiectului
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=gestionare_proiecte', 'nume_utilizator', 'parola_utilizator');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conexion->prepare("DELETE FROM projects WHERE id = :id");
        $stmt->bindParam(':id', $projectId);
        $stmt->execute();

        header("Location: projects.php");
        exit();
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        die();
    }
} else {
    header("Location: projects.php");
    exit();
}
?>
