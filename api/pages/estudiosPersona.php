<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Aulica 18</title>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
    <h1>Estudios de la persona</h1>
    <?php
    $nombre = $_REQUEST["nombrePersona"];
    $educacion = $_REQUEST["educacion"];

    echo "<p>'$nombre' ";
    switch ($educacion) {
        case 1:
            echo "no tiene estudios";
            break;
        case 2:
            echo "tiene educación primaria";
            break;
        case 3:
            echo "tiene educación secundaria";
            break;
    }
    echo "</p>";
    ?>
</body>

</html>