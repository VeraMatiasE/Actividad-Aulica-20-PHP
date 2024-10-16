<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Aulica 18</title>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>

    <?php
    $ar_pedido = fopen("pedido.txt", "a") or
        die("Problemas en la creacion");
    $nombre = $_REQUEST["nombre"];
    fputs($ar_pedido, "Nombre: $nombre\n");
    $direccion = $_REQUEST["direccion"];
    fputs($ar_pedido, "Dirección: $direccion\n");
    if (isset($_REQUEST["jamonQueso"])) {
        $cantidadJamonQueso = $_REQUEST["cantidadJamonQueso"];
        fputs($ar_pedido, "Jamon y Queso. Cantiddad: $cantidadJamonQueso\n");
    }
    if (isset($_REQUEST["napolitana"])) {
        $cantidadNapolitana = $_REQUEST["cantidadNapolitana"];
        fputs($ar_pedido, "Napolitana. Cantiddad: $cantidadNapolitana\n");
    }
    if (isset($_REQUEST["muzzarella"])) {
        $cantidadMuzzarella = $_REQUEST["cantidadMuzzarella"];
        fputs($ar_pedido, "Muzzarella. Cantiddad: $cantidadMuzzarella\n");
    }
    fputs($ar_pedido, "---------------------------\n");
    fclose($ar_pedido);
    echo "El pedido se terminó de cargar correctamente.";
    ?>

</body>
