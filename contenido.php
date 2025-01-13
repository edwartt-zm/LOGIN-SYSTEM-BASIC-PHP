<?php
require_once 'functions.php';
verificarSesion();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contenido Protegido</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .logout-btn { background: #dc3545; color: white; border: none; padding: 10px 20px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
    <p>Este es el contenido protegido de la página.</p>
    
    <form action="cerrar_sesion.php" method="POST">
        <button type="submit" class="logout-btn">Cerrar Sesión</button>
    </form>
</body>
</html>