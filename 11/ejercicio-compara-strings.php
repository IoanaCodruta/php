<?php
//exercitiu facut de Marc
#2. Escribe un programa que dado dos strings compruebe si los dos primeros caracteres y los dos últimos son iguales.

//Dos strings
//$texto1 = "asdasszs";
//$texto2 ="dsfdds ds ddsdss";
//
////Los valores de principio y final del primer string
//echo $dosprimerosTexto1 = substr($texto1, 0, 1);
//echo $dosfinalesTexto1 = substr($texto1, -1);
//
//echo "=";
//
////Los valores de principio y final del segundo string
//echo $dosprimerosTexto2 = substr($texto2, 0, 1);
//echo $dosfinalesTexto2 = substr($texto2, -1);
//echo "? <br>";
//
//if ($dosprimerosTexto1 == $dosprimerosTexto2 && //$dosfinalesTexto1 == $dosfinalesTexto2) {
//    echo "Los dos strings empiezan y acaban igual";
//} elseif ($dosprimerosTexto1 != $dosprimerosTexto2 && //$dosfinalesTexto1 == $dosfinalesTexto2){
//    echo "Los dos strings no empiezan igual pero si acaban //igual";
//} elseif ($dosprimerosTexto1 == $dosprimerosTexto2 && //$dosfinalesTexto1 != $dosfinalesTexto2){
//    echo "Los dos strings empiezan igual pero no acaban igual";
//} else {
//    echo "Los dos strings ni empiezan ni acaban igual";
//}


//exercitiu facut de mine
function primeledoualiteresiultimele($str1, $str2)
{
    $primulcaracter1 = substr($str1, 0, 2); // Ob?ine primele dou? caractere ale primului ?ir
    $aldoileacaracter1 = substr($str1, -2); // Ob?ine ultimele dou? caractere ale primului ?ir

    $primulcaracter2 = substr($str2, 0, 2); // Ob?ine primele dou? caractere ale celui de-al doilea ?ir
    $aldoileacaracter2 = substr($str2, -2); // Ob?ine ultimele dou? caractere ale celui de-al doilea ?ir

    if ($primulcaracter1 === $primulcaracter2 && $aldoileacaracter1 === $aldoileacaracter2) {
        return true;
    } else {
        return false;
    }
}
$string1 = "Hello World";
$string2 = "Help Wanted";

if (primeledoualiteresiultimele($string1, $string2)) {
    echo "Primele doua caractere si ultimele doua caractere sunt egale.";
} else {
    echo "Primele doua caractere si ultimele doua caractere nu sunt egale.";
}
?>