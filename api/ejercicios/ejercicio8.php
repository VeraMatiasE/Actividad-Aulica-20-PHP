<?php
// 8 - Estructuras repetitivas (for - while - do/while)
echo "<h1>8 - Estructuras repetitivas (for - while - do/while)</h1>";
echo "<h2>Tabla del 2</h2>";

echo "<h3>For</h3>";
for ($i = 2; $i <= 20; $i += 2) {
    echo " $i";
}

echo "<h3>While</h3>";
$i = 2;
while ($i <= 20) {
    echo " $i";
    $i += 2;
}

echo "<h3>Do While</h3>";
$i = 2;
do {
    echo " $i";
    $i += 2;
} while ($i <= 20);
?>