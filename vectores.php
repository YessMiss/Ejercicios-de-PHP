<?php
// Crear un vector asociativo que almacena las claves de acceso de 5 usuarios
$usuarios = array(
    "usuario1" => "clave123",
    "usuario2" => "abc456",
    "usuario3" => "qwerty789",
    "usuario4" => "pass321",
    "usuario5" => "secret987"
);

// Acceder a cada componente por su nombre (clave)
echo "<h1>Claves de Acceso de los Usuarios</h1>";
echo "<p>Usuario1: " . $usuarios["usuario1"] . "</p>";
echo "<p>Usuario2: " . $usuarios["usuario2"] . "</p>";
echo "<p>Usuario3: " . $usuarios["usuario3"] . "</p>";
echo "<p>Usuario4: " . $usuarios["usuario4"] . "</p>";
echo "<p>Usuario5: " . $usuarios["usuario5"] . "</p>";
?>
