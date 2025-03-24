<?php
// Definir el nombre del archivo
$archivo = "datos.txt";

// Comprobar si el archivo existe
if (file_exists($archivo)) {
    // Abrir el archivo en modo de solo lectura
    $contenido = file_get_contents($archivo);
    
    // Mostrar el contenido del archivo
    echo "<h1>Pedidos de Pizzas</h1>";
    echo "<pre>$contenido</pre>";
} else {
    // Si el archivo no existe
    echo "<p>El archivo de pedidos no existe o no tiene datos.</p>";
}
?>
