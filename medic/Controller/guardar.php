<?php
$input = file_get_contents("php://input");
$nuevoDato = json_decode($input, true);

$ruta = "../Model/data.json";

$datos = [];
if (file_exists($ruta)) {
    $contenido = file_get_contents($ruta);
    $datos = json_decode($contenido, true);
}

$datos[] = $nuevoDato;

file_put_contents($ruta, json_encode($datos, JSON_PRETTY_PRINT));
echo "✅ Datos guardados correctamente.";
?>

