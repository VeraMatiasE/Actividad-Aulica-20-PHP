<?php
// 15 - Creación de un archivo de texto.
echo "<h1></h1>";
?>
<form action="pages/generarPedido.php" method="post">
    <label for="nombrePedido">Nombre:</label>
    <input type="text" id="nombrePedido" name="nombre" />
    <br>
    <label for="direccionPedido">Dirección:</label>
    <input type="text" id="direccionPedido" name="direccion" />
    <br>
    <input type="checkbox" id="jamonQuesoCheck" name="jamonQueso" />
    <label for="jamonQuesoCheck">Jamon y Queso</label>
    <label for="cantidadJamonQueso">Cantidad</label>
    <input type="number" id="cantidadJamonQueso" name="cantidadJamonQueso" />
    <br>
    <input type="checkbox" id="jamonNapolitanaCheck" name="napolitana" />
    <label for="jamonNapolitanaCheck">Napolitana</label>
    <label for="cantidadNapolitana">Cantidad</label>
    <input type="number" id="cantidadNapolitana" name="cantidadNapolitana" />
    <br>
    <input type="checkbox" id="jamonMuzzarellaCheck" name="muzzarella" />
    <label for="jamonMuzzarellaCheck">Muzzarella</label>
    <label for="cantidadMuzzarella">Cantidad</label>
    <input type="number" id="cantidadMuzzarella" name="cantidadMuzzarella" />
    <br>
    <input type="submit" />
</form>