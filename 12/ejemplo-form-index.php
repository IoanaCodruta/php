<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            text-align: center;
        }
        /* Estilos generales del formulario */
        form {
            width: 300px;
            margin: 0 auto;
        }

        /* Estilos para los campos de entrada de texto */
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilos para las opciones de radio */
        input[type="radio"] {
            margin-right: 5px;
        }

        /* Estilos para el campo de selección */
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilos para la casilla de aceptación de términos */
        input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Estilos para el botón de envío */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <title>Ejemplo de formulario por GET</title>
</head>

<body>
    <h1>Formulario de método GET</h1>
    <form action="recibe-post.php" method="post"> <!-- con action le decimos donde guarda los datos y method cómo lo envia POST o GET -->
        <label>Nombre:</label>
        <input type="text" placeholder="Escribe tu nombre" name="nombre" > <!-- el value lo define el usuario -->
        <br>
        <label>Sexo:</label><br>
        <input type="radio" name="sexo" value="mujer" id="mujer"> <!-- name iguales -->
        <label for="mujer">Mujer</label> <!-- El for del label se relaciona bon id del input -->
        <br>
        <input type="radio" name="sexo" value="hombre" id="hombre"> <!-- name iguales, como accedemos a ellos mediante PHP-->
        <label for="hombre">Hombre</label>
        <br>
        <label>Fecha:</label>
        <select name="fecha">
            <option value=""> </option> 
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>
        <br>
        <input type="checkbox" name="terminos" id="terminos" value="si">
        <label for="terminos">Aceptar Términos</label>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>