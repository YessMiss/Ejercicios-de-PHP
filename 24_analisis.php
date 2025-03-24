<html>
<head>
<title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
</head>
<body>
<h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO</h1><br>
<br>

<?php
// Verificamos si el formulario fue enviado y si 'firstname' está presente
if (isset($_POST['firstname'])) {
    echo "Hola <b>{$_POST['firstname']}</b>, encantado de saludarte.";
} else {
    echo "Por favor, ingresa tu nombre en el formulario.";
}
?>

</body>
</html>
