<?php

$nombre = trim($_POST['nombre']);

if ($nombre != "") {
    $archivo = fopen("djs.csv", "a");
    fputcsv($archivo, [$nombre]);
    fclose($archivo);
}

echo "DJ registrado correctamente <br>";
echo "<a href='registro.html'>Registrar otro DJ</a>";

?>