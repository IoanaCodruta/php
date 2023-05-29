<?php
session_start();

//echo 'Bine ati venit! <br />';

//echo $_SESSION['color'] . '<br>';  // verde
//echo $_SESSION['animal']. '<br>'; // gato
//echo date('H:i:s d m Y', $_SESSION['instante']);

//echo '<br /><a href="ejemplo1.php">Exemplu 1</a>';

// Verific? dac? formularul a fost trimis ?i numele utilizatorului este corect

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nume_utilizator'])) {
    $numeUtilizatorCorect = 'Gabriel'; // Numele utilizatorului corect

    $numeUtilizator = $_POST['nume_utilizator'];

    if ($numeUtilizator === $numeUtilizatorCorect) {
        echo '<br />Utilizator corect';
    } else {
        echo '<br />Utilizatorul nu exista';
    }
} 
?>

<!-- Formular pentru introducerea numelui utilizatorului -->
<!DOCTYPE html>
<html>
<head>
    <title>Comprobar Usuario</title>
    <link rel="stylesheet" href="stil-ejemplo2.css">
</head>
<body>
    <h1>Verificati utilizatorul</h1>
<form method="POST" action="ejemplo2.php">
    <label for="nume_utilizator">Nume utilizator:</label>
    <input type="text" id="nume_utilizator" name="nume_utilizator">
    <button type="submit">Trimite</button>
</form>
<!-- Buton pentru a reveni la pagina anterioar? -->
<a href="ejemplo2.php"><button>Inapoi</button></a>
<a href="nou.php"><button>Nou</button></a>



