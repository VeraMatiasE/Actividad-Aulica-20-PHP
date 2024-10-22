<?php
// 18 - Funciones en PHP
echo "<h1>18 - Funciones en PHP</h1>";
?>
<form action="pages/verificarClaves.php" method="post">
    <label for="nombreUsuario">Nombre de Usuario</label>
    <input type="text" id="nombreUsuario" name="nombre" />
    <br>
    <label for="clave1">Ingrese su contraseña:</label>
    <input type="password" id="clave1" name="clave1" />
    <br>
    <label for="clave1">Vuelva a Ingresar:</label>
    <input type="password" id="clave2" name="clave2" />
    <br>
    <input type="submit" value="Enviar" />
</form>