<?php

    session_start(); // Inicializar sesion

    //Si se abre a la pagina sin haberse logeado mostrar error y redirigir a login
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar sesión para ver esta página.");
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greatest List</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <p>
        <a href="cerrar_sesion.php" style="color: white;">Cerrar sesión</a>
    </p>

    <div id="app">
        <div class="form">
            <h1>Crear nuevo evento</h1>
            <form action="">
                <input type="text" name="" id="eventName" placeholder="Agrega el nombre de tu evento">
                <input type="date" name="" id="eventDate">
                <input type="submit" name="" id="bAdd" value="Añadir evento">
            </form>
         </div>
    </div>

    <div id="eventsContainer"></div>


    <script src="main.js"></script>
</body>
</html>