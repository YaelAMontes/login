<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ya está autenticado
if (isset($_SESSION['usuario'])) {
    header("Location: pagina_protegida.php"); // Redirigir al usuario a la página protegida si ya está autenticado
    exit();
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Verificar las credenciales (puedes reemplazar esta parte con una autenticación real)
    if ($usuario === "usuario" && $contrasena === "contrasena") {
        $_SESSION['usuario'] = $usuario; // Guardar el nombre de usuario en la sesión
        header("Location: pagina_protegida.php"); // Redirigir al usuario a la página protegida
        exit();
    } else {
        $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form method="post">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contrasena" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <?php if (isset($mensaje_error)) { echo "<p>$mensaje_error</p>"; } ?>
</body>
</html>
