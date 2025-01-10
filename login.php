<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión</title>
</head>
<body>
    <form action="index.php?action=inicio" method="post">
        <label for="nom">Nombre de usuario</label>
        <br>
        <input type="text" name="nom" value=<?php if(isset($_COOKIE["usuario"])) echo $_COOKIE["usuario"]?>>
        <br>
        <label for="psw">Contraseña</label>
        <br>
        <input type="password" name="psw">
        <br>
        <input type="checkbox" name="rec" <?php if(isset($_COOKIE["usuario"])) echo "checked";?>>
        <label for="rec">Recordarme</label>
        <br>
        <input type="submit" value="Enviar" name="fIni">
    </form>
    <p>¿No tienes cuenta? <a href="index.php?action=registro">Registrate</a></p>
</body>
</html>