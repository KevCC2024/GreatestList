<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Greatest List</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="form">
        <h2>Crear cuenta</h2>
        <form action="registro_usuario_be.php" method="POST">
            <label for="nombre">Nombre: </label><br>
            <input type="text" name="nombre" id="nombre" ><br>

            <label for="correo">Correo: </label><br>
            <input type="text" name="correo" id="correo" ><br>

            <label for="clave">Contraseña: </label><br>
            <input type="password" name="clave" id="clave"><br>

            <input type="submit" name="" id="bRegistro" value="Registrarse"><br>
            <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
        </form>
     </div>
</body>
</html>