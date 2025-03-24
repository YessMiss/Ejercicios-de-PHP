<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los datos existen antes de usarlos
    $name = isset($_POST['name']) ? $_POST['name'] : "No ingresado";
    $sports = isset($_POST['sports']) ? $_POST['sports'] : [];
    
    // Contar la cantidad de deportes seleccionados
    $countSports = count($sports);

    // Mostrar los datos recibidos para depuración
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Mostrar el resultado
    echo "<h1>Información Recibida</h1>";
    echo "<p>Nombre: <b>$name</b></p>";
    echo "<p>Has seleccionado <b>$countSports</b> deporte(s).</p>";

    if ($countSports > 0) {
        echo "<p>Los deportes que practicas son:</p>";
        echo "<ul>";
        foreach ($sports as $sport) {
            echo "<li>$sport</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionaste ningún deporte.</p>";
    }
}
?>
