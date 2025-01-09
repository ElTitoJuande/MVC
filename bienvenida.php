<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenid@ <?php if(isset($nUsu)) echo $nUsu; ?></h1>
    <form action="index.php?action=cerrarSesion" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>
</body>
</html>