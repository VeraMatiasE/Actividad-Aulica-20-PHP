<?php
include("conexion.php");
conectar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Actividad Aulica 18</title>
  <link rel="stylesheet" href="styles/style.css" >
</head>

<body>
  <div class="sidebar">
    <header><a href="index.php">Guia PHP</a></header>
    <ul>
      <?php
      $sql = "SELECT nombre_item, nombre_modulo FROM menu";
      if (!$resultados = $con->query($sql)) {
        printf("Falló en la obtención de datos\n");
        exit();
      }

      $modulos = $resultados->fetch_all(MYSQLI_ASSOC);
      foreach ($modulos as $modulo) {
        echo "<li><a href=\"index.php?modulo=$modulo[nombre_modulo]\">$modulo[nombre_item]</a></li>";
      }

      ?>
    </ul>
  </div>

  <main>

    <?php

    if (isset($_GET["modulo"])) {
      include("ejercicios/$_GET[modulo].php");
    } else {
      ?>
      <h2>Bienvenido a la Guía PHP</h2>
      <p>Este es el contenido principal de la guía 20 y 22 de la guía de php.</p>
      <?php
    }
    ?>

  </main>

</body>

</html>
