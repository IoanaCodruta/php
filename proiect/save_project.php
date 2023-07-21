<?php
// Verific?m dac? datele au fost trimise prin formularul de ad?ugare
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexiunea la baza de date
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=gestionare_proiecte', 'nume_utilizator', 'parola_utilizator');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        die();
    }

    // Prelu?m datele din formular
    $projectName = $_POST['project_name'];
    $description = $_POST['description'];

    // Salv?m datele în baza de date
    $stmt = $conexion->prepare("INSERT INTO projects (project_name, description) VALUES (:project_name, :description)");
    $stmt->bindParam(':project_name', $projectName);
    $stmt->bindParam(':description', $description);

    // Execut?m interogarea
    try {
        $stmt->execute();
        echo "Proiectul a fost ad?ugat cu succes!";
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    // Închidem conexiunea la baza de date
    $conexion = null;
}
?>
