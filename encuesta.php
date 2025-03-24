<?php
// Establece la cookie de control para evitar votos múltiples
setcookie("check", 1);

// Cuando el formulario es enviado, marca al usuario como que ya ha votado
if (isset($_POST['submit'])) {
    setcookie("voted", 1);
}

?>

<html>
<head>
<title>Encuesta de opinion</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Encuesta</h1>
<h3>¿Qué opinas de este curso de php?</h3>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="radio" name="reply" value="0"> Excelente, he aprendido mucho.<br>
    <input type="radio" name="reply" value="1"> Más o menos, es muy complicado.<br>
    <input type="radio" name="reply" value="2"> ¡Bah! Para qué quiero aprender php.<br><br>

    <?php
    // Mostrar el botón solo si el usuario no ha votado
    if (empty($_POST['submit']) && empty($_COOKIE['voted'])) {
    ?>
        <input name="submit" type="submit" value="Vota!">
    <?php
    } else {
        echo "<p>Gracias por tu voto.</p>\n";
        
        // Si el formulario fue enviado y el usuario no ha votado previamente
        if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])) {
            $file = "results.txt";
            
            // Verifica si el archivo existe
            if (!file_exists($file)) {
                // Si no existe, crea un archivo con valores iniciales (suponiendo que hay 3 opciones)
                $initialVotes = "0,0,0"; // 3 opciones de voto, cada una empieza en 0
                file_put_contents($file, $initialVotes);
            }
            
            // Abre el archivo para leer y escribir
            $fp = fopen($file, "r+");
            
            // Lee el contenido del archivo
            $vote = fread($fp, filesize($file));
            
            // Divide el contenido en un array utilizando la coma como separador
            $arr_vote = explode(",", $vote);
            
            // Si una respuesta fue seleccionada, incrementa la opción correspondiente
            $reply = $_POST['reply'];
            $arr_vote[$reply]++;
            
            // Vuelve a montar el string con las nuevas cantidades
            $vote = implode(",", $arr_vote);
            
            // Regresa al principio del archivo
            rewind($fp);
            
            // Escribe los nuevos resultados en el archivo
            fputs($fp, $vote);
            
            // Cierra el archivo
            fclose($fp);
        }
    }
    ?>
</form>

<p>[ <a href="results.php" target="_blank">Ver resultados de la encuesta</a> ]</p>

</body>
</html>
