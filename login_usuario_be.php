<?php

    session_start();

    include 'conexion_be.php';

    $Nombre_de_usuario = $_POST['Nombre_de_usuario'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre_de_usuario = '$Nombre_de_usuario' and contrasena = '$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $Nombre_de_usuario;
        header("location: bienvenido.php");
        exit;
    }else{
        echo'
            <script>
                alert("El usuario introducido no existe,por favor verifique los datos introducidos");
                window.location = "brdstudios.html";
            </script>        
        ';
        exit;
    }
?>