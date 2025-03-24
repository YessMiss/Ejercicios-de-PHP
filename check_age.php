<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Validar si la edad es mayor o igual a 18
    if ($age >= 18) {
        $result = "¡Hola, $name! Eres mayor de edad.";
    } else {
        $result = "¡Hola, $name! Eres menor de edad.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado de la Edad</h1>
    <p><?php echo $result; ?></p>
</body>
</html>
