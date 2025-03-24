<html>
<head>
<title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
</head>
<body>
<h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO</h1><br>
<br>
<h1>analisis de formularios (analisis.php)</h1>

<?php
// Verificar si el formulario ha sido enviado y las variables existen
if (isset($_POST['gender']) && isset($_POST['lastname'])) {
    // Verificar el género y saludar de acuerdo a ello
    if ($_POST['gender'] == 0) {
        echo "Hola Sr. ";
    } else {
        echo "Hola Sra. ";
    }
    
    // Mostrar el apellido ingresado
    echo "<b>{$_POST['lastname']}</b>, encantado de saludarte.";
} else {
    echo "Por favor complete el formulario.";
}
?>

</body>
</html>
