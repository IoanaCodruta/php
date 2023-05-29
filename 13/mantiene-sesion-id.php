<?php
// Iniciar la sesi�n
session_start();

// Generar un nuevo SID si no se ha creado uno previamente
if (!isset($_SESSION['SID'])) {
    $_SESSION['SID'] = session_id();
}

// Mostrar el SID
echo "El SID de la sesi�n actual es: " . $_SESSION['SID'];

echo '<br /><a href="sesion-id.php">Volver</a>';
?>