<html>
<head>
<title>Condicional Switch</title>
</head>
<body>
<h1>Condicional Switch. Ejemplo</h1>
<?php
/*Declaramos una variable con un valor de muestra */
$posicion = "arriba";
echo "La variable posicion es ",$posicion; echo "<br>";  // Corrige la comilla faltante aquí
switch($posicion){
    case "arriba":    // Primer condición si es arriba
        echo "La variable contiene el valor de arriba";
        break;
    case "abajo":    // Segunda condición del supuesto
        echo "La variable contiene el valor de abajo";
        break;
    default:    // Condición por defecto o si no es ninguna
        echo "La variable contiene otro valor distinto arriba y abajo";
}
?>

</body>
</html>
