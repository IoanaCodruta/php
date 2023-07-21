<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conexiunea la baza de date ?i procesarea formularului
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=gestionare_proiecte', 'nume_utilizator', 'parola_utilizator');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $projectId = $_POST['project_id'];
        $projectName = $_POST['project_name'];
        $description = $_POST['description'];

        $stmt = $conexion->prepare("UPDATE projects SET project_name = :project_name, description = :description WHERE id = :id");
        $stmt->bindParam(':project_name', $projectName);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $projectId);

        try {
            $stmt->execute();
            header("Location: projects.php");
            exit();
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        die();
    }
} else {
    if (isset($_GET['id'])) {
        $projectId = $_GET['id'];

        // Conexiunea la baza de date ?i interogarea pentru proiectul specificat
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=gestionare_proiecte', 'nume_utilizator', 'parola_utilizator');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conexion->prepare("SELECT * FROM projects WHERE id = :id");
            $stmt->bindParam(':id', $projectId);
            $stmt->execute();
            $project = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            die();
        }
    } else {
        header("Location: projects.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizeaz? Proiect</title>
    <style>
        /* Stilurile pentru header ?i nav sunt acelea?i ca în index.php */

        /* Stilurile pentru formularul de actualizare */
        main {
            margin: 20px;
        }

        h1 {
            margin-bottom: 10px;
        }

        form {
            max-width: 400px;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <!-- Nav bar cu linkuri c?tre celelalte pagini -->
    </header>

    <main>
        <h1>Actualizeaz? Proiect</h1>
        <form action="update_project.php" method="post">
            <input type="hidden" name="project_id" value="<?php echo $project['id']; ?>">
            <label for="project_name">Nume proiect:</label>
            <input type="text" id="project_name" name="project_name" value="<?php echo $project['project_name']; ?>" required>
            <br>
            <label for="description">Descriere:</label>
            <textarea id="description" name="description" rows="4" required><?php echo $project['description']; ?></textarea>
            <br>
            <input type="submit" value="Actualizeaz? Proiect">
        </form>
    </main>
</body>
</html>
