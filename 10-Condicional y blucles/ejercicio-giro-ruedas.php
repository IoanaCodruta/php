<?php

// if (condition1) {
//     # primera acci�n
// } 
// else if(condition2){
//     if (condition2.1) {
//         # primera acci�n de la segunda
//     } else if(condition2.2){
//         # segunda acci�n de la segunda 
//     }  else {
//         # Todo lo dem�s de las condiciones de condicion2
//     }
// } 
// else if(condition3){
//     # etc acci�n 3
// } 
// else {
//     # Todo lo dem�s
// }


$VelRizq=-13; //VELOCIDAD RUEDA IZQUIERDA
$VelRder=13; //VELOCIDAD RUEDA DERECHA
if ($VelRizq>=0 && $VelRder>=0) {
    if($VelRizq>$VelRder){
        echo "Estamos girando a la derecha";
    } 
    else if ($VelRizq<$VelRder){
        echo "Estamos girando a la izquierda";
    }
    else if ($VelRizq==0 && $VelRder==0) {
        echo 'Esta parado';
    } else {
        echo 'Corre hacia delante';
    }
}
else if ($VelRizq<0 && $VelRder<0) {
    if($VelRizq>$VelRder){
        echo "Estamos girando a la izquierda hacia atr�s";
    } 
    else if ($VelRizq<$VelRder){
        echo "Estamos girando a la derecha hacia atr�s";
    } else {
        echo 'Corre hacia atr�s';
    }
}  
else {
    echo 'Gira sobre si mismo';
}

?>