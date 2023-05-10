<?php 

/* Operadores Aritm�ticos:
+	Suma
-	Resta
*	Multiplicaci�n
/	Divisi�n
%	Resto de la divisi�n 10/6 nos "sobran" 4
**	Exponente 10^6
-- */
// $numero1 = 10;
// $numero2 = 6;
// $resultado = $numero1 ** $numero2;
// echo gettype($resultado);
// echo $resultado;

/* Operadores de Asignaci�n:
=
+=
-=
*=
/=
-- */
$numero = 10;
// $numeros = 13;
$numero5 = 5;
// $numero = $numero + $numero5; Asignaci�n de Suma
$numero += $numero5;
// $numeros += $numero5; //$numeros = $numeros + $numero5;
//echo $numero .'<br>'; //15
// echo $numeros .'<br>'; //15
// $numero = $numero - 7; Asignaci�n de Resta
$numero -= 7;
//echo $numero .'<br>'; //22
// $numero = $numero * 3; Asignaci�n de Multiplicaci�n
$numero *= 3;
//echo $numero .'<br>'; //66
// $numero = $numero / 2; Asignaci�n de Divisi�n
//$numero /= 2;
// $numero = $numero % 3; Asignaci�n de Resto
$numero %= 3;
// echo $numero .'<br>'; //0
$numero=10;
// $numero = $numero ** 3; Asignaci�n de Exponente 10*10*10
$numero **= 3;
//echo $numero; //1000

/* Operadores de Comparaci�n:
==
===
!=, <>
!==
>
<
>=
<=
<=> -1 0 1
-- */
$stringNumero = '10'; // String
$numero = 10; //Integer
$numSpaceship = 13;
$variable = 'true';
// echo $stringNumero == $numero; //1 True
// echo $stringNumero === $numero; // En PHP es vacio el False no "0"
// echo $numero < $numSpaceship; //1 True 
// echo $numero >= $stringNumero; //1 True 

// echo 'Igual valor?: '.   ($stringNumero==$numero) . '<br>'; //true
// echo 'Id�nticos?: ' .  ($stringNumero===$numero); //false

// if ($stringNumero===$numero) {
// 	echo 'Id�nticos valor y tipo de $stringNumero y  $numero';
// }
// else{
//     echo '$stringNumero y $numero no son id�nticos';
// }



// echo $numero<=>$numSpaceship; 
//< -1 
###Ejemplo de spaceship <=>
$numeros = [3, 1, 2, 3];
// var_dump ($numeros);
// echo "<br>";
//Ordena valores del array comparando <=>
usort($numeros, function($a, $b) {
  return $a <=> $b;
});
// var_dump ($numeros); //Tendremos $numeros = [1, 2, 3];


/* Operadores de Incremento / Decremento:
++$x
$x++
--$x
$x--
-- */

// $numero = 10;
// echo $numero .  '<br>'; //10
//$numero = $numero + 1;
//$numero += 1;
//PostIncremento
// echo 'Valor del $numero++= ' . $numero++ . '<br>'; //10
// echo $numero . '<br>';
//PreIncremento
// echo 'Valor del ++$numero= ' . ++$numero . '<br>';
// echo 'Valor final de $numero= ' . $numero;
# La diferencia es lo que muestra y lo que GUARDA de VALOR
// echo $numero--;
// echo "<br />";
// echo $numero;
// echo "<br />";
// echo --$numero;
// echo "<br />";
// echo $numero;


/* 

Operadores de Strings - Cadenas de texto:
. concatenaci�n
.= concatenaci�n asignaci�n

*/
// $texto = 'Cadena de Texto';
// echo $texto . "<br>";
// $texto2 = ' Una segunda Cadena de Texto';
// echo $texto . $texto2 . "<br>"; 
// $texto .= $texto2; 
// echo $texto. "<br>";
// echo $texto2;

// EJEMPLO NOMBRES APELLIDOS
// $nombre = 'Marc';
// $apellidos = 'Esteve Garcia';
// $nombreCompleto = $nombre . " " . $apellidos;
// $nombreCompleto = $nombre .= " " . $apellidos; //Cuidado por que $nombre cambia de valor!!!
// echo $nombreCompleto . "<br>";
// echo $nombre . " como estamos";

######################
/* Operadores L�GICOS:
and, && 
or, ||
xor
! es el NOT l�gico

*/

$numero = 21;

// if ($numero >= 10 xor $numero > 20 xor $numero > 1) {
// 	echo "Se cumple toda la condici�n";
// }
// else{
//     echo "No se cumple la condici�n";
// }

//Ejemplo AND && y ! NOT l�gico
// $esta_autenticado = true;
// $es_mayor_de_edad = false;

// if ($esta_autenticado && $es_mayor_de_edad) {
//   echo "Bienvenido a la secci�n restringida.";
// } elseif (!$esta_autenticado && $es_mayor_de_edad) {
//   echo "Debes estar autenticado para acceder a esta secci�n.";
// } elseif ($esta_autenticado && !$es_mayor_de_edad) {
//   echo "Debes ser mayor de edad para acceder a esta secci�n.";
// } else {
//   echo "Debes estar autenticado y ser mayor de edad para acceder a esta secci�n.";
// }

//NOT l�gico !!!
// $bool=false;
// if (!$bool) { //NOT FALSE = TRUE
// 	echo '!$bool se cumple1' . $bool;
// }
// else{
//     echo '!$bool no se cumple2' . $bool;
// }


###Operadores array

$array1=['a' =>'Hola', 'b'=> 'Hello'];
$array2=['c' =>'Adi�s', 'd' =>'Adeu'];

#NUEVA FUNCI�N print_r() muestra en pantalla la suma y en este caso, la suma es una fusi�n de las claves y valores de ambas matrices
$fusionArrays=$array1 + $array2;
// print_r($fusionArrays); 
// echo '<br>';
// var_dump($fusionArrays);
//  echo '<br>';

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");
// print_r($x + $y); 

$x=array( "a" => "10", "b" => "green");  
$y=array("b" => "green","a" => 10 );  
var_dump($x == $y); //BOOL(TRUE)
var_dump($x === $y); //BOOL(FALSE) el orden!!! tambi�n

#NUEVA FUNCI�N EMPTY() vacia la variable?
// Si la "variable $user" esta vacia empty($user) = TRUE, asignamos a la variable $status = "anonymous"
// echo $status = (empty($user)) ? "an�nimo" : "sesi�n iniciada";
// echo "<br>";

// $user = "John Doe";
// $user=NULL;
// if empty($user) = FALSE, set $status = "logged in"

//OPERADOR TERNARIO
//echo $status = (empty($user)) ? "an�nimo" : 'sesi�n iniciada y $user no esta vacia y es igual a '. $user;

//OPERADOR FUSI�N NULA
// variable $color es "rojo" if $color does not exist or is null
// $color="blue";
//echo $color = $color ?? "rojo";

?>