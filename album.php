<html>
<head>
    <title>Mi álbum de fotografías</title>
</head>
<body>
    <h1>Mi álbum de fotos en línea</h1>
    <h3>Cargar archivo</h3>
    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" name="submit" value="Cargar archivo">
    </form>

    <?php
    // Definir la ruta de almacenamiento de las imágenes
    $ruta = "img/";

    // Verificar si el directorio existe, si no, crear uno
    if (!is_dir($ruta)) {
        mkdir($ruta, 0777, true); // Crear directorio con permisos adecuados
        echo "<p>El directorio 'img/' no existía, se ha creado con éxito.</p>";
    }

    // Verificar si el formulario fue enviado y si hay un archivo
    if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) {
        $tamanyomax = 200000; // Tamaño máximo en bytes (200 KB)
        $nombretemp = $_FILES['archivo']['tmp_name']; // Nombre temporal del archivo subido
        $nombrearchivo = $_FILES['archivo']['name']; // Nombre del archivo subido
        $tamanyoarchivo = $_FILES['archivo']['size']; // Tamaño del archivo subido
        $tipoarchivo = getimagesize($nombretemp); // Obtener tipo de imagen

        // Verificar que el archivo sea GIF o JPG
        if ($tipoarchivo[2] == IMAGETYPE_GIF || $tipoarchivo[2] == IMAGETYPE_JPEG) {
            // Verificar que el tamaño del archivo no exceda el máximo permitido
            if ($tamanyoarchivo <= $tamanyomax) {
                // Intentar mover el archivo subido al directorio especificado
                if (move_uploaded_file($nombretemp, $ruta . $nombrearchivo)) {
                    echo "<p>El archivo se ha cargado <b>con éxito</b>. Tamaño de archivo: <b>$tamanyoarchivo</b> bytes, Nombre de imagen: <b>$nombrearchivo</b><br></p>";
                } else {
                    echo "<p>No se ha podido cargar el archivo.</p>";
                }
            } else {
                echo "<p>El archivo es demasiado grande. El tamaño máximo permitido es <b>$tamanyomax bytes</b>.</p>";
            }
        } else {
            echo "<p>El archivo no es un archivo GIF o JPG válido.</p>";
        }
    }

    // Verificar si el directorio 'img/' contiene archivos
    if ($filehandle = opendir($ruta)) {
        echo "<h3>Imágenes cargadas:</h3>";
        // Mostrar todas las imágenes subidas en el directorio "img/"
        while ($file = readdir($filehandle)) {
            if ($file != "." && $file != "..") {
                // Obtener información sobre la imagen (dimensiones, etc.)
                $tamanyo = getimagesize($ruta . $file);
                // Mostrar la imagen en el navegador
                echo "<p><img src='$ruta$file' $tamanyo[3]><br></p>\n";
            }
        }
        closedir($filehandle); // Cerrar el directorio
    } else {
        echo "<p>No se puede acceder al directorio de imágenes.</p>";
    }
    ?>
</body>
</html>
