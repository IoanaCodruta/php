<?php
echo "1 Hola mundo";
echo '<br>';
echo "2 Esto abarca
multiple l�neas. Los saltos de l�nea tambi�n
se mostrar�n";
echo '<br>';
echo nl2br("3 Esto abarca\nm�ltiples l�neas. Los saltos de l�nea tambi�n\nse mostrar�n."); //FUNCIONA SIEMPRE
echo '<br>';
echo "4 Esto abarca\nm�ltiples l�neas. Los saltos de l�nea tambi�n\nse mostrar�n."; //Sin la funcion nl2br() idem que print
echo '<br>';
echo "5 Para escapar caracteres se hace \"as�\".";
echo '<br>';
echo '6 Para comillas dobles, utilizamos comillas simples "as�".<br>';
echo '6.5 Para comillas simples tambien utilizamos comillas simples \'as�\'.';
echo '<br>';
echo "7 Al rev�s de comillas 'as�'.";
echo '<br>';

// Se pueden usar variables dentro de una sentencia echo
$pepito = "nombre ";
$bar = "apellido";

echo "fdsfgsdf es $pepito"; // fdsfgsdf es es nombre
#Las comillas dobles admiten $variables sin concatenar pero podria dar problemas de seguridad
echo '<br>';
echo 'fdsfgsdf es '. $pepito;
echo '<br>';
// Tambi�n se pueden usar arrays
$baz = array("clave" => "valor");

echo "Esto es {$baz['clave']} !"; //Esto es valor!

echo '<br>';
// Si se utilizan comillas simples, se mostrar� el nombre de la variable, no su valor
echo 'foo es $pepito'; // foo es $foo
echo '<br>';
// Si no usan otros caracteres, se puede utilizar echo para mostrar el valor de las variables.
echo $pepito;
echo '<br>';         
echo $pepito,$bar," multiples par�metros ",4; //echo admite m�ltiples par�metros     
echo '<br>';
// Las cadenas pueden ser pasadas individualmente como varios argumentos o concatenadas como un �nico argumento
echo 'Esta '. 'cadena ', 'est� '. 'hecha '. 'con m�ltiple par�metros.';
echo '<br>';
echo 'Esta ' . 'cadena ' . 'est� ' . 'hecha ' . 'con concatenaci�n.' . "\n";

echo '<br>';
$variable = "variable";

echo <<<END
Aqu� se utiliza la sintaxis de "here document" para mostrar
m�ltiples l�neas con interpolaci�n de $variable. N�tese
que el finalizador de here document debe aparecer en una 
l�nea con solamente un punto y coma. �Nada de espacios extra!
END;
echo '<br>';
// Ya que echo no se comporta como una funci�n, el siguiente c�digo no es v�lido.
// ($variable) ? echo 'true' : echo 'false';
$var3 = 3;
print $var3;
// Sin embargo, el siguiente c�digo funcionar�:
($var3) ? $var3= print 'true' : $var3 = print 'false'; 

print $var3;
// print tambi�n es una construcci�n, pero se comporta como una funci�n, por lo que puede usarse en este contexto
echo $var3 ? 'true': 'false'; // dando la vuelta a la declaraci�n

print $var3;
?>