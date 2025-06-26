<?php
$ruta = "../Model/data.json";

if (file_exists($ruta)) {
    $contenido = file_get_contents($ruta);
    echo $contenido;
} else {
    echo json_encode([]);
}
?>