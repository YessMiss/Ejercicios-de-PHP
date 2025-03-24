<html>
<head>
<title>Bucle While 2</title>
</head>
<body>
<h1>Bucle While 2</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    ¿Cuántas veces?
    <input type="text" name="number">
    <input type="submit" value="Enviar">
</form>
<p>
<?php
/* Mostraremos el uso de la sentencia While y comenzamos a usar entrada del teclado mediante un formulario simple */
if ( isset( $_POST['number'] )) {
    $number = $_POST['number'];
    $counter = 1;
    while ($counter <= $number) {
        echo "<b>$counter</b>.- Los bucles son fáciles!<br>\n";
        $counter++;
    }
    echo "Se acabó.\n";
}
?>
</p>
</body>
</html>
