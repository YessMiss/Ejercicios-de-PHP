<?php
// Función que compara las claves ingresadas
function verificarClaves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        return "Las claves no coinciden. Por favor, intente nuevamente.";
    } else {
        return "Las claves coinciden. ¡Registro exitoso!";
    }
}

// Comprobar si los datos fueron enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    if (isset($_POST['username']) && isset($_POST['clave1']) && isset($_POST['clave2'])) {
        $username = $_POST['username'];
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];

        // Llamar a la función que verifica si las claves coinciden
        $mensaje = verificarClaves($clave1, $clave2);

        // Mostrar el mensaje
        echo "<h1>Resultado de Registro</h1>";
        echo "<p>Nombre de usuario: <b>$username</b></p>";
        echo "<p>$mensaje</p>";
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
