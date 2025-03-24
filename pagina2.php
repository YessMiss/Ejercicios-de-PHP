<html>
<head>
    <title>Resultado de la Consulta</title>
</head>
<body>

<?php
// Establecer la conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "phpfacil");

// Verificar si hubo un error en la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Obtener el mail desde el formulario
$mail = $_POST['mail'];

// Preparar la consulta SQL
$sql = "SELECT codigo, nombre, codigocurso FROM alumnos WHERE mail = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $mail);  // "s" indica que el parámetro es de tipo string

// Ejecutar la consulta
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Mostrar los resultados
    while ($reg = $resultado->fetch_assoc()) {
        echo "Nombre: " . $reg['nombre'] . "<br>";
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
    echo "No existe un alumno con ese mail.";
}

// Cerrar la conexión
$conexion->close();
?>

</body>
</html>
