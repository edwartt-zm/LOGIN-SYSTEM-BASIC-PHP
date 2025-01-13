<?php
function conectarDB() {
    $conexion = mysqli_connect("localhost", "root", "root", "proyecto");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    return $conexion;
}

function validarUsuario($usuario, $contraseña) {
    $conexion = conectarDB();
    $consulta = "SELECT * FROM usuarios WHERE usuario=? AND contraseña=?";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contraseña);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $esValido = mysqli_num_rows($resultado) == 1;
    mysqli_close($conexion);
    return $esValido;
}

function iniciarSesion($usuario) {
    session_start();
    $_SESSION['usuario'] = $usuario;
}

function cerrarSesion() {
    session_start();
    session_destroy();
}

function verificarSesion() {
    session_start();
    if(!isset($_SESSION['usuario'])) {
        header("Location: login.php");
        exit();
    }
}
?>