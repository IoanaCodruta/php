<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
// echo count($meses); //12
// $meses[11]; //Diciembre
// $meses[count($meses)-1];

// for($i = 0; $i < count($meses); $i++){
// 	echo $meses[$i] . '<br />';
// }


$contador = 0;
$stockProducto=100;

//Aqui podria cambiar constantemente el $contador
// $stockProducto se modifica en el tiempo

while($contador < count($meses)){
	echo $meses[$contador]. '<br />';

	$contador++;
}

?>