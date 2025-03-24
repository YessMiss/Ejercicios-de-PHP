<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
// Crear conexión con MySQL utilizando mysqli
$conexion = new mysqli("localhost", "root", "", "phpfacil");

// Verificar si hubo un error en la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Realizar la consulta
$registros = $conexion->query("SELECT codigo, nombre, mail, codigocurso FROM alumnos");

// Verificar si la consulta se ejecutó correctamente
if ($registros) {
    while ($reg = $registros->fetch_assoc()) {
        echo "Código: " . $reg['codigo'] . "<br>";
        echo "Nombre: " . $reg['nombre'] . "<br>";
        echo "Mail: " . $reg['mail'] . "<br>";
        echo "Curso: ";

        // Utilizar switch para mostrar el nombre del curso
        switch ($reg['codigocurso']) {
            case 1:
                echo "PHP";
                break;
            case 2:
                echo "ASP";
                break;
            case 3:
                echo "JSP";
                break;
        }
        echo "<br><hr>";
    }
} else {
    echo "Error en la consulta: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
</body>
</html>
