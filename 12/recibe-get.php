<?php

print_r($_GET);


#Muestra en pantalla lo que hemos rellenado del formulario se puede editar y modificar el array del get
//Incluso inyectar c�digo: <h1>Hola</h1> o <script>alert('Hola')</script>

if(!$_GET) {
    header('Location: http://localhost/php-etif-2023/12-app-formulario/ejemplo-form-index.php'); //Carpeta y archivo para rellenar el formulario correcto, en recibe-get.php no tendremos datos si el submit no se ha realizado ya que $_GET estar� vacio
}

// $nombre = $_GET['nombre'];
// $sexo = $_GET['sexo'];
// $fecha = $_GET['fecha'];
// $terminos = $_GET['terminos'];

//VALIDACI�N NOMBRE
if ($_GET['nombre']) { 
    $nombre = $_GET['nombre'];
} else {
    echo 'El usuario no ha escrito su nombre';
}

// VALIDACI�N SEXO
if ($_GET['sexo']) { 
    $sexo = $_GET['sexo'];
} else {
    echo 'El usuario no ha escrito su sexo';
}

//VALIDACI�N FECHA
if ($_GET['fecha']) { 
    $fecha = $_GET['fecha'];
} else {
    echo 'El usuario no ha escrito su fecha';
}

//VALIDACI�N TERMINOS
if ($_GET['terminos']) { 
    $terminos = $_GET['terminos'];
} else {
    echo 'El usuario no ha aceptado terminos';
}


echo 'Hola ' . $nombre . ' eres un ' . $sexo . ' y has escogido la fecha: '. $fecha . ' y  se han aceptado terminos? ' . $terminos;

?>