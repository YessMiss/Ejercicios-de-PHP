<html>
<head>
    <title>Ejemplo de PHP con Operaciones y Comparaciones</title>
</head>
<body>

<h1>Bienvenido a mi página PHP</h1>

<?php
// Declaración de variables
$numero1 = 10;
$numero2 = 5;
$texto = "¡Operaciones con PHP!";

// Operaciones Aritméticas
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multi = $numero1 * $numero2;
$division = $numero1 / $numero2;

// Mostrar operaciones
echo "<p>La suma de $numero1 y $numero2 es: $suma</p>";
echo "<p>La resta de $numero1 y $numero2 es: $resta</p>";
echo "<p>La multiplicación de $numero1 y $numero2 es: $multi</p>";
echo "<p>La división de $numero1 y $numero2 es: $division</p>";

// Comparaciones
echo "<p>¿Es $numero1 igual a $numero2? " . ($numero1 == $numero2 ? 'Sí' : 'No') . "</p>";
echo "<p>¿Es $numero1 mayor que $numero2? " . ($numero1 > $numero2 ? 'Sí' : 'No') . "</p>";

// Operadores lógicos
$logico = ($numero1 > $numero2) && ($numero1 != $numero2);
echo "<p>La comparación lógica (¿$numero1 es mayor que $numero2 y diferente de $numero2?): " . ($logico ? 'Verdadero' : 'Falso') . "</p>";

// Mostrar texto
echo "<p>$texto</p>";

?>

</body>
</html>
