<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Greatest List</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form">
        <h2>Inicio de sesión</h2>
        <form action="login_usuario_be.php" method="POST">
            <label for="correo">Correo: </label><br>
            <input type="email" name="correo" id="correo" ><br>

            <label for="clave">Contraseña: </label><br>
            <input type="password" name="clave" id="clave"><br>

            <input type="submit" name="" id="bLogin" value="Iniciar sesión"><br>
            <p>¿Aún no tienes una cuenta? <a href="registro.php">¡Regístrate!</a></p>
        </form>
     </div>
</body>
</html>