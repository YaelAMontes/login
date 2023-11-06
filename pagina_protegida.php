<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); // Redirigir al usuario de vuelta a la página de inicio de sesión si no está autenticado
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página protegida</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Esta es una página protegida.</p>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>
