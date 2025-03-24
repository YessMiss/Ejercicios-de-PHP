<html>
<head>
<title>Ejemplo de operadores de Comparación</title>
</head>
<body>
<h1>Ejemplo de operaciones comparación en PHP</h1>
<?php
$a = 8;
$b = 3;
$c = 3;

// Operadores de comparación
echo "¿$a es igual a $b? " . ($a == $b) . "<br>"; // Compara si $a es igual a $b
echo "¿$a es diferente de $b? " . ($a != $b) . "<br>"; // Compara si $a es diferente de $b
echo "¿$a es menor que $b? " . ($a < $b) . "<br>"; // Compara si $a es menor que $b
echo "¿$a es mayor que $b? " . ($a > $b) . "<br>"; // Compara si $a es mayor que $b
echo "¿$a es mayor o igual a $c? " . ($a >= $c) . "<br>"; // Compara si $a es mayor o igual a $c
echo "¿$a es menor o igual a $c? " . ($a <= $c) . "<br>"; // Compara si $a es menor o igual a $c
?>
</body>
</html>
