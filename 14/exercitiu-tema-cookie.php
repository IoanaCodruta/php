<!DOCTYPE html>
<html>
<head>
    <title>Formular personalizare stil text</title>
    <style>
        /* Stilurile implicite */
        body {
            font-family: Arial, sans-serif;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="color"], input[type="number"] {
            width: 100px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post" action="rezultat.php">
        <div class="form-group">
            <label for="text-color">Culoarea textului (paragrafe, h1):</label>
            <input type="color" id="text-color" name="text-color" value="<?php echo $_COOKIE['textColor'] ?? '#000000'; ?>">
        </div>
        <div class="form-group">
            <label for="background-color">Culoarea fundalului:</label>
            <input type="color" id="background-color" name="background-color" value="<?php echo $_COOKIE['backgroundColor'] ?? '#ffffff'; ?>">
        </div>
        <div class="form-group">
            <label for="font-size">Dimensiunea literelor (paragrafe):</label>
            <input type="number" id="font-size" name="font-size" min="1" max="100" value="<?php echo $_COOKIE['fontSize'] ?? '14'; ?>">
        </div>
        <div class="form-group">
            <input type="submit" value="Aplica">
        </div>
    </form>
</body>
</html>
