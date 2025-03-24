<?php
$file = "results.txt";

// Verificar si el archivo existe
if (file_exists($file)) {
    // Leer el contenido del archivo
    $vote = file_get_contents($file);
    // Convertir la cadena a un array
    $arr_vote = explode(",", $vote);
    echo "<h1>Resultados de la encuesta</h1>";
    echo "<p>Excelente, he aprendido mucho: " . $arr_vote[0] . " votos</p>";
    echo "<p>Más o menos, es muy complicado: " . $arr_vote[1] . " votos</p>";
    echo "<p>¡Bah! para qué quiero aprender PHP: " . $arr_vote[2] . " votos</p>";
} else {
    echo "<p>No se han registrado resultados aún.</p>";
}
?>
