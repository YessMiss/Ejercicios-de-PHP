<html>
<head></head>
<body>
<?php
$dia = date("d"); // Obtener el día del mes
if ($dia <= 10) {  // Si el día es menor o igual a 10
    echo "Sitio activo";
} else {  // Si el día es mayor que 10
    echo "Sitio fuera de servicio";
}
?>
</body>
</html>
