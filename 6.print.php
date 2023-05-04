<?php
print("Hola mundo<br>");
print "print() tambi�n funciona sin par�ntesis.<br>";

print "Esto separa
m�ltiples l�neas. Los saltos de l�nea tambi�n
se mostrar�n<br>";

print nl2br('1Esto separa\n m�ltiples l�neas. Los saltos de l�nea tambi�n\nse mostrar�n.<br>');//comillas simples no entiende \n

print nl2br("2Esto separa\nm�ltiples l�neas. Los saltos de l�nea tambi�n\nse mostrar�n.\n");//comillas dobles SI entiende \n

// Tambi�n se puede usar variables usando print
$foo = "foobar";
$bar = "barbaz";

print "foo es $foo"; // foo es foobar
print '<br>' . $bar . '<br>';
// Tambi�n se pueden usar arrays
$bar = array("value" => "valor");

print "Esto es {$bar['value']} !"; // Esto es valor !
print '<br>';
$fruita = ["platano", "limon", "manzana"];
print implode(", ", $fruita) . " son frutas"; //funci�n implode muestra: platano, limon, manzana
print '<br>';

// Al usar comillas simples se mostrar� el nombre de la variable, no su valor
print 'foo is $foo'; // foo is $foo
print '<br>';
// Si no se necesita mostrar otros caracteres, se puede simplemente mostrar variables
print "Para escapar caracteres se hace \"as�\".";

print $foo;          // foobar
print '<br>';

$variable = "variable";

print <<<END
Este p�rrafo utiliza la sintaxis "here document" para mostrar
m�ltiples l�neas con la interpolaci�n de $variable. N�tese
que el terminador de here document debe aparecer al final
de la l�nea con punto y coma y �ning�n espacio en blanco extra!
END;
?>