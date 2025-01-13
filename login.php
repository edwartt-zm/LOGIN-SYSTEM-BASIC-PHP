<?php
require_once 'functions.php';
session_start();
if(isset($_SESSION['usuario'])) {
    header("Location: contenido.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Esto asegura que la página se ajuste al ancho del dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <!-- Interruptor para cambiar entre tema claro y oscuro -->
    <div class="theme-switch">
        <span class="theme-text">Modo oscuro</span>
        <input type="checkbox" id="theme-toggle">
        <label for="theme-toggle" class="theme-label"></label>
    </div>

    <!-- Contenedor principal del formulario de login -->
    <div class="login-container">
        <div class="login-header">
            <h1>Bienvenido</h1>
            <p>Por favor ingresa tus credenciales</p>
        </div>
        
        <!-- Formulario que envía los datos a validar.php -->
        <form action="validar.php" method="POST">
            <div class="input-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="usuario" required>
            </div>
            
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="contraseña" required>
            </div>

            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Recordarme</label>
                </div>
                <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </div>
            
            <button type="submit" class="login-button">Iniciar Sesión</button>
        </form>
    </div>

    <script src="./js/script.js"> </script>

</body>
</html>