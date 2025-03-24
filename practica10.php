<html>
<head>
    <title>Tabla de Multiplicar del 2</title>
</head>
<body>

<h1>Tabla de Multiplicar del 2</h1>

<h2>Usando el bucle FOR:</h2>
<?php
for ($i = 1; $i <= 10; $i++) {
    $resultado = 2 * $i;
    echo "2 x $i = $resultado<br>";
}
?>

<h2>Usando el bucle WHILE:</h2>
<?php
$i = 1;
while ($i <= 10) {
    $resultado = 2 * $i;
    echo "2 x $i = $resultado<br>";
    $i++;
}
?>

<h2>Usando el bucle DO/WHILE:</h2>
<?php
$i = 1;
do {
    $resultado = 2 * $i;
    echo "2 x $i = $resultado<br>";
    $i++;
} while ($i <= 10);
?>

</body>
</html>
