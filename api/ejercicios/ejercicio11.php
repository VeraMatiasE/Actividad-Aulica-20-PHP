<?php
// 11 - FORMULARIO (control checkbox)
echo "<h1>11 - FORMULARIO (control checkbox)</h1>";
?>
<form action="pages/deportes.php" method="post">
    <label for="nombreDeporte" required>Nombre de la persona</label>
    <input type="text" id="nombreDeporte" name="nombre" />
    <label>Deporte practicado</label>
    <ul>
        <!-- futbol, basket, tennis, voley -->
        <li><input type="checkbox" name="deporteFutbol" id="deporteFutbol" /><label for="deporteFutbol">Futbol</label>
        </li>
        <li><input type="checkbox" name="deporteBasket" id="deporteBasket" /><label for="deporteBasket">Baskquet</label>
        </li>
        <li><input type="checkbox" name="deporteTennis" id="deporteTennis" /><label for="deporteTennis">Tenis</label>
        </li>
        <li><input type="checkbox" name="deporteVoley" id="deporteVoley" /><label for="deporteVoley">Voley</label></li>
    </ul>
    <input type="submit" value="Envie" />
</form>