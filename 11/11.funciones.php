<?php 

/* FUNCIONES INTEGRADAS
count();
sort();
rsort();
var_dump();
print_r();

+ de 1000 funciones
W3Schools (categoría): 
https://www.w3schools.com/php/php_ref_overview.asp
PHP.net 
https://www.php.net/manual/es/indexes.functions.php?authuser=0

*/

// FUNCIONES DEFINIDAS POR EL USUARIO
#Sintaxis función sin argumentos
#Suelen ser los llamados métodos GETTERS
//Con devolución de valores "return"
function saludar1(){
	return "Hola!1";
}
// echo saludar1();

//Con acción interna en la función
function saludar2(){
	echo "Hola!2";
}
// saludar2();
// echo "<br>";


#Con un solo parámetro

$x = "Angel"; //Valor en la variable para una visita
function saludo($nombre){ 
	return 'Saludo, ' . $nombre;
}
// echo saludo($x) . '<br />';
// echo saludo('Fernando') . '<br />'; //Valor en argumento
// $x = "Gerard";//Valor en la variable
// echo saludo($x) . '<br />';
// echo saludo('Rafael') . '<br />';//Valor en argumento
// echo saludo('Manuel') . '<br />';//Valor en argumento
// echo saludo($x) . '<br />';

#Con dos parámetros

function sumar($numero1, $numero2){
	$resultado = $numero1 + $numero2;
	return $resultado;
}
// echo $resultado; //Warning, nunca se ha llamado
echo sumar(10, 15); //25
// echo $resultado; //Warning, aunque no obtiene el valor fuera
$resultado = sumar(2,3); //5
echo $resultado;
//Equivalente a sumar($numero1, $numero2)
function sumar2($numero1, $numero2){
	return $numero1 + $numero2;
}
//Nos ahorramos la variable $resultado dentro de la función
$resultadoSuma= sumar2(13, 7);
echo $resultadoSuma; //20
?>