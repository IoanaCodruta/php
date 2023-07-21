<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adauga Proiect</title>
    <style>
        /* Stilurile pentru header ?i nav sunt acelea?i ca în index.php */

        /* Stilurile pentru formularul de ad?ugare */
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
            background-color: #CECECE;
            color: #CECECE;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #CECECE;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul> 
                <a href="create_project.php">Adauga un proiect</a>
                <a href="projects.php">Proiecte</a>
                <!-- Alte linkuri pentru func?ionalit??i adi?ionale -->
            </ul>
        </nav>
    </header>

    <main>
        <h1>Adauga Proiect</h1>
        <form action="save_project.php" method="post">
            <label for="project_name">Nume proiect:</label>
            <input type="text" id="project_name" name="project_name" required>
            <br>
            <label for="description">Descriere:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            <br>
            <input type="submit" value="Salveaza Proiect">
        </form>
    </main>
</body>
</html>
