<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 3 - XML y PHP</title>
</head>
<body>
    <h2>Lectura de XML con SimpleXML</h2>

    <?php
    $xml = simplexml_load_file("colores.xml");

    foreach ($xml->color as $color) {
        echo "El color " . $color->nombre . " tiene el código hexadecimal " . $color->codigo_hexadecimal . "<br>";
    }
    ?>
</body>
</html>