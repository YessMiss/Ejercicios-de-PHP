<html>
<head>
    <title>Eliminar Curso</title>
</head>
<body>
<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "phpfacil");

// Verificar si hubo un error en la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre del curso desde el formulario
    $nombrecurso = $_POST['nombrecurso'];

    // Buscar el curso en la base de datos
    $sql = "SELECT * FROM cursos WHERE nombrecur = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $nombrecurso);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si el curso existe
    if ($result->num_rows > 0) {
        // El curso existe, procedemos a eliminarlo
        $delete_sql = "DELETE FROM cursos WHERE nombrecur = ?";
        $delete_stmt = $conexion->prepare($delete_sql);
        $delete_stmt->bind_param("s", $nombrecurso);
        if ($delete_stmt->execute()) {
            echo "El curso '$nombrecurso' ha sido eliminado con éxito.";
        } else {
            echo "Error al eliminar el curso.";
        }
    } else {
        // El curso no existe
        echo "No se encontró un curso con el nombre '$nombrecurso'.";
    }

    // Cerrar la conexión
    $conexion->close();
}
?>
</body>
</html>
