<?php
session_start(); // Iniciar la sesión

// Destruir la sesión para cerrar la sesión del usuario
session_destroy();

header("Location: index.html"); // Redirigir al usuario de vuelta a la página de inicio de sesión después de cerrar sesión
exit();
?>
