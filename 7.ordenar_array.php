<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

//Ejercicio final*
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

sort($meses); //Función del array que queremos ordenar
sort($numeros);
// rsort($meses); Inverso del array
// rsort($numeros);

//Ejercicio final*
sort($semana);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Ano</title>
</head>
<body>
	<h2>Meses del Ano</h2>
	<ul>
		<?php
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
	</ul>

	<h2>Numeros orden creciente</h2>
	<ul>
		<?php
			foreach($numeros as $numero){
				echo '<li>' . $numero . '</li>';
			}
		?>
	</ul>
	<!-- Ejercicio final* -->
	<h2>Dias de la semana ordenados alfabeticamente inversos</h2>
	<ol>
		<?php
			foreach($semana as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
	</ol>
	<!-- EJERCICIO*
	Creas array $semana, ordenamos en orden inverso y mostramos los dias de la semana, también en un listado ordenado
	-->
</body>
</html>