<?php

    include 'conexion_be.php';

    //Obtener los valores del formulario de registro
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    
    //Encriptar contraseña
    $clave = hash('sha512', $clave); 

    //Verificar que el correo no exista en la BD
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario 
                                                WHERE correo = '$correo'");
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registado, intenta con otro correo.");
                window.location = "/GreatestList/registro.php";
            </script>
        ';

        exit(); //Terminar el script para que no se ejecute el codigo restante
    }

    //Insertar en la base de datos
    $query = "INSERT INTO usuario(nombre, correo, clave) 
              VALUES('$nombre', '$correo', '$clave')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Se ha creado la cuenta exitosamente! Ahora puedes iniciar sesión!");
                window.location = "/GreatestList/login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Hmmm... parece que ocurrió un error. Inténtalo más tarde.");
                window.location = "/GreatestList/registro.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>