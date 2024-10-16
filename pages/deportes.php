<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Aulica 18</title>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
    <h1>Deportes Practicados</h1>
    <?php
    $nombre = $_REQUEST["nombre"];

    $cantidadDeportes = 0;
    $deportes = "";
    if (isset($_REQUEST["deporteFutbol"])) {
        $cantidadDeportes++;
        $deportes .= " futbol";
    }
    if (isset($_REQUEST["deporteBasket"])) {
        $cantidadDeportes++;
        $deportes .= " basquet";
    }
    if (isset($_REQUEST["deporteTennis"])) {
        $cantidadDeportes++;
        $deportes .= " tenis";
    }
    if (isset($_REQUEST["deporteVoley"])) {
        $cantidadDeportes++;
        $deportes .= " tenis";
    }

    echo "<p>'$nombre' practica $cantidadDeportes deportes.</p>";
    echo "Los deportes que practica son: $deportes";
    ?>
</body>

</html>