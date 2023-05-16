<?php
#1. Escribe un programa que devuelva si un string es palíndromo (se escribe igual hacia delante y hacia detrás). Ejemplo: "sometemos" o "aibofobia".
//function Palindrome($string){ 
//    if (strrev($string) == $string){ 
//        return 1; 
//    }
//    else{
//        return 0;
//    }
//} 
//$original = "SOMETEMOS";
//if(Palindrome($original)){ 
//    echo "Palindrome"; 
//}
//else { 
//echo "Not a Palindrome"; 
//}

//al doilea exemplu facut de Marc

echo $palabra = "Amor Roma ";
$palabra = trim($palabra);
$palabra = strtolower($palabra);
$palabra = str_replace(" ", "", $palabra);
$palabraRev = strrev($palabra);

if ($palabra == $palabraRev) {
    echo "<br> es un palíndromo";
} else {
    echo "<br> NO es un palíndromo";
}


//#2. Escribe un programa que dado dos strings compruebe si los dos primeros caracteres y los dos últimos son iguales.
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