<html>
<head>
<title>Ejemplo de operadores Lógicos</title>
</head>
<body>
<h1>Ejemplo de operaciones lógicas en PHP</h1>
<?php
$a = 8;
$b = 3;
$c = 3;

// Operadores lógicos
echo ($a == $b) && ($c > $b), "<br>";   // Y lógico (AND)
echo ($a == $b) || ($b == $c), "<br>";   // O lógico (OR)
echo !($b <= $c), "<br>";                // Negación lógica (NOT)
?>
</body>
</html>
