<?php
// 7 - Estructura condicional (if)
echo "<h1>7 - Estructura condicional (if)</h1>";
$numero = rand(1, 3);
echo "<p> El número aleatorio generado es: ";
if ($numero == 1) {
    echo "uno";
} else if ($numero == 2) {
    echo "dos";
} else if ($numero == 3) {
    echo "tres";
}
echo "</p>";
?>