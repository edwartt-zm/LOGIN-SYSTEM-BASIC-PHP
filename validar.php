<?php
require_once 'functions.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if(validarUsuario($usuario, $contraseña)) {
    iniciarSesion($usuario);
    header("Location: contenido.php");
} else {
    echo '<script>
        alert("Usuario o contraseña incorrectos");
        window.location = "index.php";
    </script>';
}
?>