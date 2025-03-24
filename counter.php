<html>
<head>
<title>Contador Sencillo</title>
</head>
<body>
<h1>Contador Sencillo</h1>
<p>Cantidad de visitas:
<b>
<?php
// Definir el nombre del archivo del contador
$archivo = "counter.txt";

// Si el archivo no existe, crearlo con un valor inicial de 0
if (!file_exists($archivo)) {
    file_put_contents($archivo, "0");
}

// Abrir el archivo en modo lectura/escritura
$fp = fopen($archivo, "r+");

// Bloquear el archivo para evitar problemas con múltiples accesos simultáneos
flock($fp, LOCK_EX);

// Leer el valor del contador
$counter = intval(fgets($fp));

// Mostrar el valor del contador
echo $counter;

// Incrementar el contador
$counter++;

// Mover el puntero al inicio del archivo
rewind($fp);

// Escribir el nuevo valor en el archivo
fwrite($fp, $counter);

// Desbloquear y cerrar el archivo
flock($fp, LOCK_UN);
fclose($fp);
?>
</b></p>
</body>
</html>
