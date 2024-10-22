<?php
// 12 - FORMULARIO (control select)
echo "<h1>12 - FORMULARIO (control select)</h1>";
?>
<form action="pages/impuestoGanancias.php" method="post">
    <label for="nombreImpuesto" required>Nombre de la persona</label>
    <input type="text" id="nombreImpuesto" name="nombre" />
    <label id="selectSueldo"></label>
    <select id="selectSueldo" name="sueldo">
        <option value="1-1000">1-1000</option>
        <option value="1001-3000">1001-3000</option>
        <option value=">3000">>3000</option>
    </select>
    <input type="submit" value="Envie" />
</form>