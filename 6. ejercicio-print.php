<?php
$txt1 = "Aprende PHP";
$txt2 = "pr0j3ct.com";
$x = 5; $y = 4;
print "<h2>" . $txt1 . "</h2>";
print "Estudia PHP con " . $txt2 . "<br>";
$variable1 = print $x + $y; //Le asigna un 1 a $variable1 porque tiene un return de un 1
// $variable2 = echo ($x + $y); //No se le puede asignar a ninguna variable porque no devuelve nada
print "<br>" . $variable1 . "<br>"; //Mostrará un 1

print '<a href="ejercicio-echo.php">ejercicio echo</a>';
# Comillas simple ' ' deben tener comillas dobles dentro
# Comillas dobles " " deben tener comillas simples dentro

//Aqui acaba el código de PHP
?>

<!-- Si finalizamos el código php podriamos integrar HTML -->
<br>
<a href="ejercicio-echo.php">ejercicio echo</a>