<?php

print_r($_SERVER);
#Para recibir en la misma p�gina
// if($_POST){
//     echo "Bienvenido " . $_POST['nombre'] . "<br>";
// }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se envia por get/post al mismo archivo</title>
</head>
<body>
    <form action="" method="post"> <!-- con action le decimos donde guarda los datos -->
        <input type="text" placeholder="Nombre" name="nombre" id=""> <!-- el value lo define el usuario -->
        <br>
        <label for="mujer">Mujer</label> <!-- El for del label se relaciona bon id del input -->
        <input type="radio" name="sexo" value="mujer" id="mujer">  <!-- name iguales -->
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre"> <!-- name iguales, como accedemos a ellos mediante PHP-->
        <br>
        <select name="fecha" id="">
            <option value="2000">2000</option> <!-- value lo recibimos con PHP -->
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>
        <label for="terminos">Aceptar T�rminos</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>
        <input type="submit" value="Enviar">
        <!-- Para enviar datos a la misma p�gina se deja en blanco action 
        o bien en vez de recibe el nombre del archivo actual ejemplo-form-index2.php 
        o bien <?php //echo htmlspecialchars($_SERVER['PHP_SELF']) ?> -->
    </form>
</body>
</html>