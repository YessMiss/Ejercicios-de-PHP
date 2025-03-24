<html>
<head>
<title>Un libro de visitas muy sencillo</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Libro de visitas</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Tu comentario:<br>
<textarea cols="55" rows="4" name="comment"></textarea><br>
Tu nombre:<br>
<input type="text" name="name"><br>
Tu e-mail:<br>
<input type="text" name="email"><br>
<input type="submit" value="Publica">
</form>

<h3>Mostrar todos los comentarios</h3>

<?php
// Nombre del archivo donde se almacenan los comentarios
$file ="guestbook.txt";

// Verifica si los campos están completos
if (!empty($_POST['comment']) && !empty($_POST['name']) && !empty($_POST['email'])) {
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Abre el archivo en modo lectura y escritura
    $fp = fopen($file, "r+");

    // Lee el contenido antiguo
    $old = fread($fp, filesize($file));

    // Crear el enlace de email
    $email = "<a href=\"mailto:$email\">$email</a>";

    // Obtener la fecha actual
    $dateOfEntry = date("Y-m-d");

    // Limpiar caracteres HTML y evitar slashes innecesarios
    $comment = htmlspecialchars($comment);
    $comment = stripslashes($comment);

    // Crear la nueva entrada del libro de visitas
    $entry = "<p><b>$name</b> ($email) escribió el <i>$dateOfEntry</i>:<br>$comment</p>\n";

    // Regresar el puntero al inicio del archivo
    rewind($fp);

    // Escribir la nueva entrada antes del contenido anterior
    fputs($fp, "$entry\n$old");

    // Cerrar el archivo
    fclose($fp);
}

// Mostrar el contenido del libro de visitas
readfile($file);
?>
</body>
</html>
