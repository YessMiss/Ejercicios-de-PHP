<!-- consultar_alumno.php -->
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

    // Obtener el nombre del alumno desde el formulario
    $nombre = $_POST['nombre'];

    // Realizar la consulta para obtener los alumnos con el nombre ingresado
    $sql = "SELECT codigo, nombre, mail, codigocurso FROM alumnos WHERE nombre LIKE '%$nombre%'";
    $resultado = $conexion->query($sql);

    // Verificar si se obtuvieron resultados
    if ($resultado && $resultado->num_rows > 0) {
        echo "<h1>Resultados de la Consulta</h1>";
        echo "<table border='1'>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Mail</th>
                    <th>Curso</th>
                </tr>";
        
        // Mostrar los resultados
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['codigo'] . "</td>
                    <td>" . $row['nombre'] . "</td>
                    <td>" . $row['mail'] . "</td>
                    <td>";

            // Mostrar el nombre del curso según el código de curso
            switch ($row['codigocurso']) {
                case 1:
                    echo "PHP";
                    break;
                case 2:
                    echo "ASP";
                    break;
                case 3:
                    echo "JSP";
                    break;
                default:
                    echo "Desconocido";
                    break;
            }
            
            echo "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados para el alumno con ese nombre.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
