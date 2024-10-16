<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actividad Aulica 18</title>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
    <h1>Los datos del formulario</h1>
    <?php
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Edad: $edad</p>";

    echo "<p><strong>$nombre</strong> ";
    if ($edad < 18) {
        echo "no ";
    }
    echo "es mayor de edad</p>";

    ?>
</body>

</html>