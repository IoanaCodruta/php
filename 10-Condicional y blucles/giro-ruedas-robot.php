<?php

// 2022 19 05 EJERCICIO ROBOT
// 1. Crea dos variables de velocidad de dos motores: $VelRizq, $VelRder tipo número entero.

// 2. En función del valor de cada rueda, decimos hacia donde se dirige. Ejemplo: $VelRizq>$VelRder entonces el robot gira a la derecha.
// Giro derecho, izquierdo y adelante, idem atrás
$VelRizq=300;
$VelRder=-300;


if ($VelRder<$VelRizq and $VelRder>0) {
    echo "girando hacia la derecha";
} elseif ($VelRizq<$VelRder and $VelRizq>0) {
    echo "girando hacia la izquierda";
} elseif ($VelRizq==$VelRder and $VelRder>0) {
    echo "avanzando";
} elseif ($VelRizq==$VelRder and $VelRder<0) {
    echo "retrocediendo";
}  elseif ($VelRizq==0 and $VelRder==0) {
    echo "stop";
}  elseif ($VelRizq<0 and $VelRder>0 and abs($VelRder) == abs($VelRizq)) {
    echo "rota en sentido antihorario";
} elseif ($VelRizq>0 and $VelRder<0 and abs($VelRder) == abs($VelRizq)) {
    echo "rota en sentido horario";
} else {
    echo "gira sobre si mismo";
};

// $VelRizq<0 and $VelRder>0 and abs($VelRder) == abs($VelRizq)

// if ($VelRizq>=0 && $VelRder>=0) {
//     //O esta parado el robot o va hacia delante
//     if ($VelRizq==0){
//         if ($VelRizq==$VelRder) {
//             echo "parado";
//         } else {
//             echo "Pivotando o girando hacia la izquierda";
//         }   
//     } else if ($VelRder==0){
//         if ($VelRder==$VelRizq) {
//             echo "parado";
//         } else {
//             echo "Pivotando o girando hacia la derecha";
//         }
//     } 
//     else if ($VelRizq==0 && $VelRder==0 ){
//         echo "parado";
//     } else {
//         echo "Acelera";
//     }  
// } else {
//     //Robot va hacia "atrás"
// }


?>