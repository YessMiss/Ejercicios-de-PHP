<html>
<head>
<title>Generación de Número Aleatorio en Castellano</title>
</head>
<body>
<h1>Valor Aleatorio entre 1 y 5 en Castellano</h1>

<?php
// Generamos un número aleatorio entre 1 y 5
$valor = rand(1, 5);

// Usamos una estructura if para verificar el valor y mostrar el número en castellano
if ($valor == 1) {
    echo "El número generado es: uno";
} elseif ($valor == 2) {
    echo "El número generado es: dos";
} elseif ($valor == 3) {
    echo "El número generado es: tres";
} elseif ($valor == 4) {
    echo "El número generado es: cuatro";
} else {
    echo "El número generado es: cinco";
}

?>

</body>
</html>
