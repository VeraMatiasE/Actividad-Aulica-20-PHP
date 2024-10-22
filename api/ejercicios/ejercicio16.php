<?php
// 16 - Lectura de un archivo de texto.
echo "<h1>16 - Lectura de un archivo de texto.</h1>";
if (
    $ar_pedido = fopen("pages/pedido.txt", "r")
) {
    while (!feof($ar_pedido)) {
        $linea = fgets($ar_pedido);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }
    fclose($ar_pedido);
} else {
    echo "No existe el archivo";
}
?>