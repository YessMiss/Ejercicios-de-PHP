<html>
<head>
    <title>Listado de Cursos</title>
</head>
<body>

<?php
// Datos de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "PHPFACIL";

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $contrasena, $basededatos);

// Verificar si hubo un error en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para seleccionar todos los registros de la tabla CURSOS
$sql = "SELECT * FROM cursos";
$resultado = $conn->query($sql);

// Verificar si hay registros
if ($resultado->num_rows > 0) {
    // Mostrar los registros en una tabla
    echo "<h1>Listado de Cursos</h1>";
    echo "<table border='1'>
            <tr>
                <th>Código</th>
                <th>Nombre del Curso</th>
            </tr>";

    // Recorrer y mostrar cada registro
    while($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["codigo"] . "</td>
                <td>" . $row["nombrecur"] . "</td>
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "No se encontraron cursos.";
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>
