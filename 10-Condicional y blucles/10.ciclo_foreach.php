<?php 

//Array indexado [0],[1],...[n]
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

//Array asociativo ["clave"=>"valor"]
$marc = array('telefono' => 54743221, 'edad' => 35, 'ciudad' => 'Castelldefels');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recorrer array asociativo también</title>
</head>
<body>
	<ul>
		<?php
			# Con el ciclo foreach podemos recorrer arrays de una manera muy fácil.
			// foreach($meses as $mes){
			// 	echo '<li>' . $mes . '</li>';
			// }
			# El ciclo foreach también NOS PERMITE recorrer arrays asosiativos.
			foreach($marc as $clave => $valor){
				echo '<li>' . $clave . ' : ' . $valor . '</li>';
			}

		?>
	</ul>
</body>
</html>