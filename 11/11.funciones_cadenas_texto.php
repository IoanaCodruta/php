<?php 

$texto = "Adeu Andreu";
$textoMalicioso = "<script>
alert('�Cuenta comprometida! Sus credenciales han sido enviadas a un servidor externo.');
</script>";

echo $texto;
echo "<br>";
//echo $textoMalicioso; //Cuidado!!!Ejecuta script!
echo "<br>";
//echo htmlspecialchars($textoMalicioso); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar c�digo fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar c�digo <b>Hola</b> o peor aun, c�digo Javascript que se pueda ejecutar
#EJEMPLO: la entidad de HTML de < es igual a &lt;
echo "<br>";
echo "Texto antes";
$nombre=" Marc   ";
echo "<br>";
echo $nombre;
echo "<br>";
echo trim($nombre); //Quita los espacios al principio y al final
echo "<br>";
echo "Texto despues";
echo "<br>";
echo $nombre;
echo "<br>";
$nombre=trim($nombre); //Para modificar la variable
echo "<br>";
echo strlen($texto); //Cuenta los caracteres totales del string
echo "<br>";
echo substr($texto, 5, 6); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
echo "<br>";
#Primer par�metro la posici�n inicial de recorte
#Segundo par�mentro la longitud que recorta (opcional, hasta el final)
echo substr($texto, -3); //Desde el final
echo "<br>";
echo strtoupper($texto); //Convierte a may�sculas
echo "<br>";
echo strtolower($texto); //Convierte a min�sculas
echo "<br>";
echo strpos($texto, 'n', 7); //Posici�n del string
echo "<br>";
echo strrev($texto);  //Invierte el texto "reverse"
echo "<br>";
$nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
echo $nuevoTexto;
echo "<br>";

###EJERCICIOS
#1. Escribe un programa que devuelva si un string es pal�ndromo (se escribe igual hacia delante y hacia detr�s). Ejemplo: "sometemos" o "aibofobia".

#2. Escribe un programa que dado dos strings compruebe si los dos primeros caracteres y los dos �ltimos son iguales.

?>