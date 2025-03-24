<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
// Crear la conexión con la base de datos
$conexion = new mysqli("localhost", "root", "", "phpfacil");

// Verificar si hubo un error en la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Obtener el mail enviado desde el formulario
$mail = $_POST['mail'];

// Consultar si el alumno con ese mail existe
$query = "SELECT codigo FROM alumnos WHERE mail = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("s", $mail); // 's' significa que el parámetro es una cadena
$stmt->execute();
$result = $stmt->get_result();

// Verificar si el registro existe
if ($result->num_rows > 0) {
    // Si el alumno existe, proceder a borrar
    $deleteQuery = "DELETE FROM alumnos WHERE mail = ?";
    $deleteStmt = $conexion->prepare($deleteQuery);
    $deleteStmt->bind_param("s", $mail);
    if ($deleteStmt->execute()) {
        echo "Se efectuó el borrado del alumno con el mail: " . $mail;
    } else {
        echo "Error al borrar el alumno: " . $deleteStmt->error;
    }
} else {
    // Si no existe el alumno, mostrar mensaje
    echo "No existe un alumno con ese mail.";
}

// Cerrar la conexión
$conexion->close();
?>
</body>
</html>
