<html>
<head>
<title>Tabla condicional 2</title>
</head>
<body>
<h1>Tabla condicional 2</h1>
<?php
/* Crearemos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos mostrar en rojo, y los valores positivos en azul */
/* Variación. Un color diferente cada fila que se imprima */

function muestra($valor, $nrenglon) {
    // Cambiar color de fondo según el número de fila (par o impar)
    if ($nrenglon % 2) {
        $fondo = "#eeeeee"; 
    } else {
        $fondo = "#dddddd";
    }

    // Cambiar color del texto según el valor
    if ($valor < 0.5) {
        $color = "red"; 
    } else {
        $color = "blue";
    }

    echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
}
?>

<table border="1">
<?php
$nrenglon = 0; // Inicializamos el número de fila

// Bucle para crear la tabla
for ($x = 0; $x <= 2; $x += 0.01) { 
    echo "<tr>";
    muestra(round($x, 2), $nrenglon); // Llamamos a la función muestra
    muestra(round(sin($x), 2), $nrenglon); // Llamamos para sin(x)
    muestra(round(cos($x), 2), $nrenglon); // Llamamos para cos(x)
    echo "</tr>";
    $nrenglon++; // Incrementamos el número de la fila después de cada iteración
}
?>
</table>
</body>
</html>
