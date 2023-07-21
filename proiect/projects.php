<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proiecte</title>
    <style>
        /* Stilurile pentru header ?i nav sunt acelea?i ca în index.php */

        /* Stilurile pentru lista de proiecte */
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

        .edit-delete {
            margin-left: 10px;
        }

        .edit-delete a {
            color: #333;
            text-decoration: none;
            padding: 2px 5px;
            border: 1px solid #333;
        }

        .edit-delete a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <!-- Nav bar cu linkuri c?tre celelalte pagini -->
    </header>

    <main>
        <h1>Lista Proiecte</h1>

        <?php
        // Conexiunea la baza de date ?i interogarea pentru proiecte
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=gestionare_proiecte', 'nume_utilizator', 'parola_utilizator');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Select?m toate proiectele din baza de date
            $stmt = $conexion->query("SELECT * FROM projects");
            $projectsList = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Verific?m dac? exist? proiecte în baza de date
            if (count($projectsList) > 0) {
                echo '<ul>';
                foreach ($projectsList as $project) {
                    echo '<li>' . $project['project_name'] . ' - Descriere: ' . $project['description'] . 
                         '<span class="edit-delete">
                            <a href="update_project.php?id=' . $project['id'] . '">Editare</a>
                            <a href="delete_project.php?id=' . $project['id'] . '">?tergere</a>
                         </span>
                        </li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Nu exist? proiecte în baz? de date.</p>';
            }
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            die();
        }

        // Închidem conexiunea la baza de date
        $conexion = null;
        ?>
    </main>
</body>
</html>
