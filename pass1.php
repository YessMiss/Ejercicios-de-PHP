<?php
// Procesar el formulario antes de cualquier salida HTML.
if (isset($_POST['pw'])) {
    $pw = $_POST['pw']; 
    if ($pw == "magic") {
        header("Location: newpage1.html");
        exit(); // Siempre usar exit después de header para evitar que el script continúe.
    } elseif ($pw == "abracadabra") {
        header("Location: newpage2.html");
        exit(); // Igual que antes, salir después de la redirección.
    } else {
        header("Location: sorry.html");
        exit(); // Salir después de la redirección a la página de error.
    }
}
?>

<html>
<head>
<title>Ejemplo de password y header</title>
</head>
<body>
<h1> Ejemplo de password y función header </h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="pw">
    <input type="submit" value="Enviar">
</form>
</body>
</html>
