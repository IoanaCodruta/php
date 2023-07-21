<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionare Proiecte</title>
    <style>
        /* Stilurile pentru header ?i nav */
        header {
            background-color: #CECECE;
            color: #CECECE;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #CECECE;
            text-decoration: none;
        }

        /* Stiluri pentru lista de proiecte */
        main {
            margin: 20px;
        }

        h1 {
            margin-bottom: 10px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul> 
                <a href="create_project.php">Adauga un proiect</a>
                <a href="projects.php">Proiecte</a>
                <a href="assign_task.php">Atribuie sarcina</a>
                <!-- Alte linkuri pentru func?ionalit??i adi?ionale -->
            </ul>
        </nav>
    </header>

    <main>
        <h1>Lista Proiecte</h1>
<!-- În loc de lista static? de proiecte, vom afi?a pagina projects.php -->
<?php include 'projects.php'; ?>
        <?php
        // Conexiunea la baza de date
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=gestionare_proiecte', 'nume_utilizator', 'parola_utilizator');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            die();
        }

        // Select?m toate proiectele din baza de date
        $stmt = $conexion->query("SELECT * FROM projects");
        $projectsList = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Verific?m dac? exist? proiecte în baza de date
        if (count($projectsList) > 0) {
            echo '<ul>';
            foreach ($projectsList as $project) {
                echo '<li>' . $project['project_name'] . ' - Descriere: ' . $project['description'] . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>Nu exista proiecte în baza de date.</p>';
        }

        // Închidem conexiunea la baza de date
        $conexion = null;
        ?>
    </main>
</body>
</html>
