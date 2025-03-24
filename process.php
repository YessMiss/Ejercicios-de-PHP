<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $name = $_POST['name'];
    $studies = $_POST['studies'];

    // Mostrar el resultado
    echo "<h1>Información Recibida</h1>";
    echo "<p>Nombre: <b>$name</b></p>";
    echo "<p>Nivel de estudios: <b>$studies</b></p>";
}
?>
