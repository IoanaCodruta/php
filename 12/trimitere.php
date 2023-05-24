<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET["termeni"])) {
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

      echo "Nume: " . $nume . "<br>";
      echo "Email: " . $email . "<br>";
      echo "Telefon: " . $telefon . "<br>";
      echo "Mesaje: " . $mesaje . "<br>";
    } else {
      // Emailul nu este valid
      echo "Adresa de email introdusa nu este valida.";
    }
  } else {
    echo "Trebuie s? acceptati termenii si conditiile.";
  }
}
?>
