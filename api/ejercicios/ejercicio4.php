<?php
// 4 - Un programita más útil que "Hola Mundo"
echo "<h1> 4 - Un programita más útil que \"Hola Mundo\"</h1>";
$numero = rand(1, 100);
echo "<p>El número generado es " . $numero . "</p>";
if ($numero <= 50)
    echo "<p>El número es menor o igual a 50</p>";
else
    echo "<p>El número es mayor a 50</p>";

?>