<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ob?ine?i valorile trimise de utilizator din formular
    $textColor = $_POST["text-color"];
    $backgroundColor = $_POST["background-color"];
    $fontSize = $_POST["font-size"];

    // Setarea cookie-urilor
    setcookie("textColor", $textColor, time() + (86400 * 30), "/"); // Expir? în 30 de zile
    setcookie("backgroundColor", $backgroundColor, time() + (86400 * 30), "/");
    setcookie("fontSize", $fontSize, time() + (86400 * 30), "/");

    // Redirec?ionare c?tre o pagin? de afi?are a rezultatelor
    header("Location: rezultat_afisare.php");
    exit();
}
?>
