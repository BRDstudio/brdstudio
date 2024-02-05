<?php

    include 'conexion_be.php';

    $Nombre_de_usuario = $_POST['Nombre_de_usuario'];
    $contrasena = $_POST['contrasena'];
    

    $query = "INSERT INTO usuarios(Nombre_de_usuario, contrasena) 
                VALUES('$Nombre_de_usuario', '$contrasena')";
    
    $verificar_Nombre_de_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre_de_usuario = '$Nombre_de_usuario'");
    
    if(mysqli_num_rows($verificar_Nombre_de_usuario) > 0){
        echo'
            <script>
                alert("Este Nombre de usuario ya esta en uso por otro usuario");
                window.location = "brdstudios.html";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo'
            <script>
                alert("usuario almacenado exitosamente");
                window.location = "brdstudios.html";
            </script>
        ';
    }else{
        echo'
        <script>
            alert("Intentalo de nuevo, usuario almacenado ");
            window.location = "brdstudios.html";
        </script>
        ';
    }
    mysqli_close($conexion);

?>