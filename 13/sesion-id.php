<?php
// Iniciar la sesión
session_start();

// Generar un nuevo SID si no se ha creado uno previamente
if (!isset($_SESSION['SID'])) {
    $_SESSION['SID'] = session_id();
}

//Función nueva session_id() genera un un id de la sesión para un usuario por ejemplo y aunque es aleatorio, será única cada vez

// Mostrar el SID
echo "El SID de la sesión actual es: " . $_SESSION['SID'];

echo '<br /><a href="mantiene-sesion-id.php">Segunda página Sesión ID</a>';
?>