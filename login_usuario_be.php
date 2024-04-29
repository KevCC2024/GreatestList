<?php

    session_start(); //Inicializar sesiones

    include 'conexion_be.php';

    //Obtener los valores del formulario de registro
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $clave = hash('sha512', $clave); //desencriptar constrasña para el login

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario 
                                            WHERE correo = '$correo' AND clave = '$clave'");

    //Verificar las credenciales en la BD 
    if(mysqli_num_rows($validar_login) > 0){ //Si las credenciales son validas
        $_SESSION['usuario'] = $correo; //Variable de sesion
        header("location: index.php"); //Redirigir al index para la gestion de eventos
        exit;

    }else{ //Si las credenciales NO son validas
        echo '
            <script>
                alert("Usuario o contraseña incorrectos. Verifique los datos.");
                window.location = "/GreatestList/login.php";
            </script>
        ';
        exit;
    }



?>