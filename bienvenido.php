<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes inicie sesión");
                window.location = "brdstudios.html"
            </script>
        
        ';
        header("location: login_de_usuario_be.php");
        session_destroy();
        die();
    }
    session_destroy();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido</title>
</head>
<body>
    <a href="cerrar_sesion.php">cerrar_sesión</a>
</body>
</html>