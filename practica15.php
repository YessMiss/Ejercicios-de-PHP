<html>
    <head>
        <title>Practica 15</title>
    </head>
    <body>
        <h1>Arreglo de días de la semana</h1>
        <?php 
        // Definición del primer arreglo (vector) con los días de la semana
        $dias[0] = 'domingo';
        $dias[1] = 'lunes';
        $dias[2] = 'martes';
        $dias[3] = 'miércoles';
        $dias[4] = 'jueves';
        $dias[5] = 'viernes';
        $dias[6] = 'sábado';
        
        // Imprimir el primer y el último elemento del arreglo
        echo "Primer día: $dias[0]";  // Domingo
        echo '<br>';
        echo "Último día: $dias[6]";  // Sábado
        echo '<br>';
        echo '<br>';

        // Otra forma de definir el arreglo (vector)
        $dias2 = array('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado');
        
        // Contar el número de elementos en el arreglo
        $max = sizeof($dias2);  // O puedes usar count($dias2)
        
        // Recorrer el arreglo y mostrar los días
        echo "<b>Días de la semana:</b><br>";
        for($i = 0; $i < $max; $i++) {
            echo "Día: $dias2[$i]<br>";
        }
        ?>
    </body>
</html>
