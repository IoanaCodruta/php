<?php

# Los arrays asosiativos nos permiten acceder a sus valores de una forma mas expl�cita.

$profesor = array(
    'nombre' => 'Marc', 
    'telefono' => 665533, 
    'edad' => 37, 
    'apellido' => 'Esteve Garcia', 
    'ciudad' => 'Castelldefels'
);

//EJERCICIO
//Con el array anterior $profesor escribe la siguiente frase:
// "El profesor se llama Marc Esteve Garcia, su edad es 37, su telefono es 665533 e imparte clases en Castelldefels"
//Ejemplo $profesor['apellido'] dar�a Esteve

echo "El profesor se llama {$profesor['nombre']} {$profesor['apellido']}, su edad es {$profesor['edad']}, su telefono es  {$profesor['telefono']} e imparte clases en  {$profesor['ciudad']} <br>"; 

# Igual que en los arrays indexados, en los asosiativos tambi�n podemos modificar sus valores simplemente accediendo a ellos.
$profesor['apellido'] = 'Esteve Garc�a';

//echo 'El nombre del profesor es ' . $profesor['nombre'] . ' ' . $profesor['apellido'] . ', su edad es ' . $profesor['edad'] . ', su tel�fono es el ' . $profesor['telefono'] . ' y imparte clases en ' . $profesor['ciudad'] . '. <br>';

$array = array(
    "1" => 3,
    "2" => "dsada",
    "1.5" => 1.5,
    "booleano" => true,
);
echo $array["1"] . '<br>';
echo $array["2"] . '<br>';
echo $array["1.5"] . '<br>';
echo $array["booleano"] . '<br>';
var_dump($array);
// Sintaxis corta
echo '<br><br>';
$otravaraiblearray = [
    "clave" => "valor1",
    "clave2" => "valor2"
];
var_dump($otravaraiblearray); 
?>