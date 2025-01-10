<body>
    <?php if(isset($err)) echo $err; ?>
    <form action="index.php?action=registrar" method="post">
        <label for="nom">Nombre de usuario</label>
        <input type="text" name="nom">
        <br>
        <label for="psw">Contraseña</label>
        <input type="password" name="psw">
        <br>
        <label for="psw">Repite la contraseña</label>
        <input type="password" name="psw2">
        <br>
        <input type="checkbox" name="rec">
        <label for="rec">Recordar usuario</label>
        <br>
        <input type="submit" value="Enviar" name="fReg">
    </form>
    <p>¿Ya tienes cuenta? <a href="index.php">Iniciar sesión</a></p>
</body>