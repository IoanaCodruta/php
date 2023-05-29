<?php
session_start();

echo 'Bine ati venit pe pagina noua<br />';

echo 'ID-ul sesiunii este: ' . session_id();

echo '<br /><a href="ejemplo1.php">Exemplu 1</a>';
echo '<br /><a href="ejemplo2.php">Exemplu 2</a>';
?>
<br>
<br>
<!-- Buton pentru a reveni la pagina anterioar? -->
<button onclick="window.history.back()">Inapoi</button>
