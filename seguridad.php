<html>
<head>
<title>El gran agujero de seguridad</title>
</head>
<body>
<h2>Agujero de seguridad en register_globals = On</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Contraseña: <input type="password" name="pass">
    <input type="submit" value="Enviar">
</form>

<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la contraseña desde el formulario de manera segura
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    // Validar la contraseña
    if ($pass == "abc_xyz_123") {
        $login = true;
    }

    // Mostrar el contenido solo si la contraseña es correcta
    if (isset($login) && $login) {
        echo "<p>Aquí empieza el arma secreta.</p>";
    } else {
        echo "<p>Contraseña incorrecta.</p>";
    }
}
?>
</body>
</html>
