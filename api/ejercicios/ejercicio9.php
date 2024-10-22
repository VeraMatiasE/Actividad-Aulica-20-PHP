<?php
// 9 - Envío de datos de un FORMULARIO (controles text y submit)
echo "<h1>9 - Envío de datos de un FORMULARIO (controles text y submit)</h1>";
?>
<form action="pages/mostrarNombreEdad.php" method="post">
    <label for="nombre">Ingrese el nombre:</label>
    <input type="text" name="nombre" id="nombre" required />
    <br>
    <label for="edad">Ingrese la edad:</label>
    <input type="number" name="edad" id="edad" required />
    <br>
    <input type="submit" value="Envie" />
</form>