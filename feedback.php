<html>
<head>
<title>Un pequeño mailer para recopilar la opinión</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
</head>
<body>
<h1>Feedback-Mailer</h1>
<p>¡Envíame un e-mail!</p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Tu dirección de e-mail: <br>
    <input type="text" name="Mail"><br>
    Tu comentario: <br>
    <textarea name="message" cols="50" rows="5"></textarea><br>
    <input type="submit" value="Enviar">
</form>

<?php
$receiverMail = "tudireccion@tudominio.es"; // Cambiar por tu correo

if (isset($_POST['Mail']) && !empty($_POST['Mail']) && isset($_POST['message']) && !empty($_POST['message'])) {
    
    $userEmail = filter_var($_POST['Mail'], FILTER_VALIDATE_EMAIL);
    
    if ($userEmail) {
        $message = htmlspecialchars($_POST['message']); // Evitar inyección de código
        $headers = "From: " . $userEmail;

        if (mail($receiverMail, "¡Tienes correo nuevo!", $message, $headers)) {
            echo "<p>Gracias por enviarme tu opinión.</p>\n";
        } else {
            echo "<p>Lo siento, ha ocurrido un error.</p>\n";
        }
    } else {
        echo "<p>Por favor, introduce una dirección de correo válida.</p>\n";
    }
}
?>

</body>
</html>
