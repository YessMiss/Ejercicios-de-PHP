<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "phpfacil");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar los cursos
$query = "SELECT * FROM cursos";
$result = $conn->query($query);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Mostrar los cursos
    while ($row = $result->fetch_assoc()) {
        echo "Código: " . $row["codigo"] . " - Nombre: " . $row["nombrecur"] . "<br>";
    }
} else {
    echo "No se encontraron cursos.";
}

// Cerrar la conexión
$conn->close();
?>
