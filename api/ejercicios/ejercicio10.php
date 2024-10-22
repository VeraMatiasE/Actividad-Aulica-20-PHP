<?php
// 10 - FORMULARIO (control radio)
echo "<h1>10 - FORMULARIO (control radio)</h1>";
?>
<form action="pages/estudiosPersona.php" method="post">
    <label for="nombrePersona">Ingrese el nombre</label>
    <input type="text" id="nombrePersona" name="nombrePersona" required />
    <br>
    <label>Seleccione la educación:</label>
    <input type="radio" value="1" id="noestudios" name="educacion" required />
    <label for="noestudios">No tiene estudios</label>
    <input type="radio" value="2" id="estudiosprimarios" name="educacion" required />
    <label for="estudiosprimarios">Estudios primarios</label>
    <input type="radio" value="3" id="estudiossecundarios" name="educacion" required />
    <label for="estudiossecundarios">Estudios secundarios</label>
    <br>
    <input type="submit" value="Envie los datos" />
</form>