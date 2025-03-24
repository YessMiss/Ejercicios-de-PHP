<html>
<head>
<title>EJERCICIO 3_2</title>
</head>
<body>
<h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO Version 3 Todo en una página</h1><br>
<br>
<h1>Rellena los campos (form.html)</h1>
<form method="post">
    <input type="radio" name="gender" value="0"> Sr.
    <input type="radio" name="gender" value="1"> Sra.<br> 
    Tu apellido:<br>
    <input type="text" name="lastname">
    <input type="submit" name="submitbutton" value="Enviar!">
</form>

<?php
// Verificar si los datos del formulario han sido enviados y están completos
if (isset($_POST['submitbutton'])) {
    // Verificamos si se han completado los campos 'gender' y 'lastname'
    if (isset($_POST['gender']) && isset($_POST['lastname']) && !empty($_POST['lastname'])) {
        // Saludo según el valor del género
        if ($_POST['gender'] == 0) {
            echo "Hola Sr. ";
        } else {
            echo "Hola Sra. ";
        }
        // Mostrar el apellido
        echo "<b>{$_POST['lastname']}</b>, encantado de saludarte.\n";
    } else {
        // Si falta algún dato
        echo "Por favor, rellena todos los campos.";
    }
}
?>
</body>
</html>
