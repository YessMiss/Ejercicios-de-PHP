<html>
<head>
<title>Generador de Número Aleatorio</title>
</head>
<body>
<h1>Generador de Número Aleatorio</h1>

<?php
// Generamos un número aleatorio entre 1 y 100
$num = rand(1, 100);

// Mostramos el número generado
echo "El número aleatorio generado es: $num <br>";

// Comprobamos si el número es menor o igual a 50, o mayor
if ($num <= 50) {
    echo "El número es menor o igual a 50.";
} else {
    echo "El número es mayor a 50.";
}
?>

</body>
</html>
