<?php
// Definir la ruta de almacenamiento de las imágenes
$ruta = "img/";

// Verificar si el directorio existe, si no, crear uno
if (!is_dir($ruta)) {
    mkdir($ruta, 0777, true); // Crear directorio con permisos adecuados
    echo "<p>El directorio 'img/' no existía, se ha creado con éxito.</p>";
}
?>
