<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 2 - Arreglos y foreach</title>
</head>
<body>
    <h2>Ejemplo de foreach con arreglo asociativo</h2>

    <?php
    $equipo = array("portero"=>"Cech", "defensa"=>"Terry", "medio"=>"Lampard", "delantero"=>"Torres");
    foreach ($equipo as $posicion => $jugador) {
        echo "El $posicion es $jugador <br>";
    }
    ?>
</body>
</html>