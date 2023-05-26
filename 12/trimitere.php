<?php
if (!$_GET) {
  header("Location: exercitiu-trimitere.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Verifica?i dac? este o cerere de tip GET
  if (isset($_GET["termeni"])) {
    // Procesa?i datele primite prin GET
    $nume = trim($_GET["nume"]);
    $email = trim($_GET["email"]);
    $telefon = trim($_GET["telefon"]);
    $mesaje = trim($_GET["mesaje"]);

    $nume = stripslashes($nume);
    $email = stripslashes($email);
    $telefon = stripslashes($telefon);
    $mesaje = stripslashes($mesaje);

    $nume = htmlspecialchars($nume);
    $email = htmlspecialchars($email);
    $telefon = htmlspecialchars($telefon);
    $mesaje = htmlspecialchars($mesaje);

    // Validarea adresei de email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Emailul este valid
      // Aici pute?i efectua ac?iunile dorite cu datele primite prin GET

      echo "Numele tau este: " . $nume . "<br>";
      echo "Email este: " . $email . "<br>";
      echo "Numarul tau de telefon este: " . $telefon . "<br>";
      echo "Mesajul tau este: " . $mesaje . "<br>";
    } else {
      // Emailul nu este valid
      echo "Adresa de email introdusa nu este valida.";
    }
  }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica?i dac? este o cerere de tip POST
  if (isset($_POST["termeni"])) {
    // Procesa?i datele primite prin POST
    $nume = trim($_POST["nume"]);
    $email = trim($_POST["email"]);
    $telefon = trim($_POST["telefon"]);
    $mesaje = trim($_POST["mesaje"]);

    // Validarea numerului de telefon
    if (preg_match('/^[0-9]+$/', $telefon)) {
      // Telefonul este valid, pute?i efectua ac?iunile dorite cu aceast? valoare
      echo "Telefon: " . $telefon;
    } else {
      // Telefonul nu este valid, afi?a?i un mesaj de eroare
      echo "Va rugam sa introduceti doar numere in campul telefon.";
    }
  }
}
?>

<html>
  <br>
  <a href="exercitiu-trimitere.php">Inapoi la formular</a>
</html>
