<?php 

### EJERCICIO: Muestra en pantalla un saludo distinto en base a una hora del dia, por ejemplo, si la hora es inferior a 13 muestra un contenido HTML con "Buenos dias" en un párrafo, si es mayor o igual a las 13:00h muestra "Buenas tardes" con otro HTML distinto

$hora = date("H");
// echo "La hora actual es " . $hora;

?>

<?php if($hora < 13){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio Condicional</title>
	</head>
	<body>
		<h1>Respuesta ejercicio de buenos dias</h1>
        <p>Buenos dias!!!</p>
	</body>
	</html>
<?php } ?>

<?php if($hora >= 13){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio Condicional</title>
	</head>
	<body>
		<h1>Respuesta ejercicio por la tarde</h1>
        <p>Buenas tardes!!!</p>
	</body>
	</html>
<?php } ?>