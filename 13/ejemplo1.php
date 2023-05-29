<?php

session_start();

echo 'Bienvenido a la pagina de ejemplo #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante']   = time();

// Funciona si la cookie de sesión fue aceptada
echo '<br /><a href="ejemplo2.php">Ejemplo 2</a>';

// O quizás pasar el id de sesión, si fuera necesario
// echo '<br /><a href="ejemplo2.php?' . SID . '">página 2</a>';

#EJERCICIO SESIÓN:
// 1. Genera un input de formulario para guardar por la visita en el ejemplo2.php y se lo asigne a la variable $_SESSION['usuario']
// 2. En ejemplo2.php pide de nuevo el usuario y con un condicional le evalues si es el usuario correcto o no. SI es correcto muestre "usuario correcto", siNO muestre "usuario no existe"

?>