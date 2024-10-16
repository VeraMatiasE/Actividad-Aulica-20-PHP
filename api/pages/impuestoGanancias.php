<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Aulica 18</title>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
    <h1>Impuesto Ganancias</h1>
    <?php
    $nombre = $_REQUEST["nombre"];
    $sueldo = $_REQUEST["sueldo"];
    echo "<p>'$nombre' ";
    switch ($sueldo) {
        case "1-1000":
        case "1001-3000":
            echo "no paga impuestos a las ganancias";
            break;
        case ">3000":
            echo "paga impuestos a las ganancias";
            break;
    }
    echo "</p>";
    ?>
</body>

</html>