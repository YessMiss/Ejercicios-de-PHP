// Guardar los datos en el archivo de texto
    $archivo = "datos.txt";
    $contenido = $pedido . $linea_puntos;

    // Escribir el pedido en el archivo
    file_put_contents($archivo, $contenido, FILE_APPEND);

    // Mostrar mensaje de confirmación
    echo "<h2>Pedido confirmado</h2>";
    echo "<p>Gracias, $nombre. Tu pedido ha sido registrado:</p>";
    echo "<pre>$pedido</pre>";
} else {
    echo "<p>Por favor, complete el formulario.</p>";
}
?>
