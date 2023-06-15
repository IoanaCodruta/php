<?php
require_once 'vista.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $correu = $_POST['correu'];

    // Filtro de saneamiento
    $nom = filter_var($nom);
    $correu = filter_var($correu, FILTER_SANITIZE_EMAIL);

    // Filtro de validaci�n del correo
    if (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electr�nico ingresado no es v�lido.";
    }

    if (empty($nom)) {
        $errors[] = "El campo de nombre est� vac�o.";
    }

    if (empty($correu)) {
        $errors[] = "El campo de correo est� vac�o.";
    }

    if (empty($errors)) {
        echo "Todos los campos son correctos.";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>