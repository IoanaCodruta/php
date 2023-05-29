<?php
// Iniciar la sesi�n
session_start();

// Generar un nuevo SID si no se ha creado uno previamente
if (!isset($_SESSION['SID'])) {
    $_SESSION['SID'] = session_id();
}

//Funci�n nueva session_id() genera un un id de la sesi�n para un usuario por ejemplo y aunque es aleatorio, ser� �nica cada vez

// Mostrar el SID
echo "El SID de la sesi�n actual es: " . $_SESSION['SID'];

echo '<br /><a href="mantiene-sesion-id.php">Segunda p�gina Sesi�n ID</a>';
?>