<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo count($meses);//función que cuenta valores de array
echo "<br>";
$ultimo_mes = count($meses) - 1;  //guardas el último valor del índice que seria el [11], cuidado no es el [12]
echo $meses[$ultimo_mes]; //muestras la última posición del array equivalente a $meses[11]
echo "<br>";

$arrayAleatorioMeses = array(
	'Enero', 'Febrero', 'Marzo', 'Agosto',
	'Septiembre', 'Octubre', 'Marzo', 'Agosto',
	'Septiembre', 'Octubre', 'Diciembre'
);
$ultimo_mes = count($arrayAleatorioMeses) - 1;
echo $arrayAleatorioMeses[$ultimo_mes];
echo "<br>";

#Recordatorio de funciones
echo implode(", ",$meses);
echo "<br>";
var_dump($meses);
echo "<br>";
echo gettype($meses);
echo "<br>";
echo count($meses);
?>