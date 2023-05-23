<?php

print_r($_POST);

if(!$_POST) {
    header('Location: http://localhost/php-etif-2023/12-app-formulario/ejemplo-form-index.php'); //Carpeta y archivo para rellenar el formulario correcto, en recibe-post.php no tendremos datos si el submit no se ha realizado ya que $_POST estará vacio
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$terminos = $_POST['terminos'];

echo 'Hola ' . $nombre . ' eres un ' . $sexo . ' y has escogido la fecha: '. $fecha . ' y  se han aceptado terminos? ' . $terminos;

?>