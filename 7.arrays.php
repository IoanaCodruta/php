<?php 

# Los arrays son como variables que nos permiten guardar multiples valores.

# Ejemplo de un arrays con los dias de la semana.
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# En los arrays podemos guardar cualquier tipo de dato, incluso podemos guardar un array dentro de otro.
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

var_dump($arreglo);
echo '<br />';
# Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro array llamado semana.
echo $semana[0] . '<br />'; //Lunes
echo $semana[1] . '<br />'; //Martes    
echo $semana[2] . '<br />'; //Miércoles
echo $semana[3] . '<br />'; //Jueves
echo $semana[4] . '<br />'; //Viernes
echo $semana[5] . '<br />'; //Sábado
echo $semana[6] . '<br />'; //Domingo

//EJERCICIO utiliza la variable $semana y otra variable array $meses que contenga los meses de año para realizar la siguiente frase: 
//"Hoy estamos a viernes del mes de Mayo"

// SOLUCIÓN
$meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto"];
echo "Hoy estamos a $semana[4] del mes de $meses[4]";
echo 'Hoy estamos a ' . $semana[4] . 'del mes de ' . $meses[4];

echo '<hr>';
echo implode('<br>', $semana); // string $separator '<br>'
echo '<hr>';
echo implode('<br>', $meses); // string $separator '<br>'
echo '<hr>';
echo '<h2>Ejemplos campus</h2>';
$cars = array("Volvo","BMW","Toyota");
$coches = [13,29,33];
var_dump($cars);
echo "<br>";
var_dump($coches);
$cars[7] = "Opel";
echo "<br>";
var_dump($cars);
echo "<br>";
echo $cars[3]; //Warning no esta definida
echo "<br>";
$variable[3]='Eva';
$variable[27]=123;
var_dump($variable);
$variable[27]="Cambio info";
echo $variable[27];
echo "<br>";

//Array mezclado entre indexado y asociativo
$coche = array(
    "modelo" => "Astra",
    "1" => "b",
    1.5 => "c",
    true => "d"
);
var_dump($coche);
echo "<br>";
echo $coche[1];//El valor es d
echo "<br>";
echo $coche["modelo"];//El valor "Astra"

// Sintaxis corta de array asociativo 
$array = [
    "clave" => "valor1",
    "clave2" => "valor2",
];
echo "<br>";
var_dump($array);

?>