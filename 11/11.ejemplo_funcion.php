<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

//echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';

//EJERCICIO: CREAR UNA FUNCI�N PARA CALCULAR EL AREA DE UN HEX�GONO DE FORMULA = (PER�METRO * APOTEMA)/2 Y EL PER�METRO ES IGUAL A UN LADO *6
function calcularPerimetroHexagono($lado){
	return $lado * 6;
}
$perimetro = calcularPerimetroHexagono(2);
echo "El per�metro del hex�gono regular es de : $perimetro <br>";

function calcularAreaHexagono($perimetro,$apotema){
	return ($perimetro * $apotema)/2;
}
$areaHex = calcularAreaHexagono($perimetro, 3);
echo "El �rea de un Hex�gono es:  $areaHex <br>";


//Funci�n �nica "unida" y en "rumano"
function calculArieHexagon($latura) {
    $perimetrul = $latura * 6;
    $apotema = $latura / (2 * tan(deg2rad(30))); // Unghiul central al hexagonului este de 60 de grade, deci utiliz?m tangenta de 30 de grade.
    $arie = ($perimetrul * $apotema) / 2;
    return $arie;
}
	$latura = 5; // �nlocui?i cu lungimea dorit? a laturii hexagonului
	$aria = calculArieHexagon($latura);
	echo "Aria hexagonului este: " . $aria;

// tot exemplul meu dar simplificat de Marc

//function calculArieHexagon($latura) {
//    return (($latura * 6) * $latura / (2 * tan(deg2rad(30)))) / 2;
//}
//$latura = 30; //***Esta variable es la que se cambia
//$aria = calculArieHexagon($latura);
//echo "Aria hexagonului este: " . $aria . " cuando el lado es " . $latura;
//
//
?>

