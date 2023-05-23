<?php 
$semana = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");

function generar_enumeracion($semana) {
    if (count($semana) == 0) {
        return "";
    } elseif (count($semana) == 1) {
        return $semana[0];
    } elseif (count($semana) == 2) {
        return $semana[0] . " y " . $semana[1];
    } else {
        $ultima = array_pop($semana);
        return implode(", ", $semana) . " y " . $ultima;
    }
}

$enumeracion = generar_enumeracion($semana);
echo $enumeracion;
?>
