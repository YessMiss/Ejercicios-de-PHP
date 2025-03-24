<?php
// Configuración de la conexión a la base de datos
$host = 'localhost'; // Puede ser una IP o 'localhost' si es local
$usuario = 'root';   // Usuario de MySQL
$contrasena = '';    // Contraseña de MySQL
$base_de_datos = 'PHPFACIL'; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si los datos fueron enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre del curso desde el formulario
    $nombrecur = $_POST['nombrecur'];

    // Preparar la consulta SQL para insertar el nuevo curso
    $sql = "INSERT INTO cursos (nombrecur) VALUES ('$nombrecur')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "<p>Curso registrado exitosamente. <a href='formulario.php'>Registrar otro curso</a></p>";
    } else {
        echo "Error al registrar el curso: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
