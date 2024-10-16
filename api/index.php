<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Actividad Aulica 18</title>
  <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

  <?php

  // 4 - Un programita más útil que "Hola Mundo"
  echo "<h1> 4 - Un programita más útil que \"Hola Mundo\"</h1>";
  $numero = rand(1, 100);
  echo "<p>El número generado es " . $numero . "</p>";
  if ($numero <= 50)
    echo "<p>El número es menor o igual a 50</p>";
  else
    echo "<p>El número es mayor a 50</p>";

  // 5 - Tipos de variables
  echo "<h1>5 - Tipos de variables</h1>";
  $integer = 10;
  $boolean = True;
  $string = "Un string";
  $double = 10.2;
  echo "Variables:<ul>";
  echo "<li>Un valor entero: $integer</li>";
  echo "<li>Un valor booleano: $boolean</li>";
  echo "<li>Un string: $string</li>";
  echo "<li>Un double: $double</li>";
  echo "</ul>";

  // 6 - Variables de tipo string
  echo "<h1>6 - Variables de tipo string</h1>";
  $numero1 = rand(1, 35);
  $numero2 = rand(1, 35);
  $numero3 = rand(1, 35);

  echo "</p>Los números generados son: $numero1, $numero2 y $numero3</p>";

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
      <li><input type="checkbox" name="deporteTennis" id="deporteTennis" /><label for="deporteTennis">Tenis</label></li>
      <li><input type="checkbox" name="deporteVoley" id="deporteVoley" /><label for="deporteVoley">Voley</label></li>
    </ul>
    <input type="submit" value="Envie" />
  </form>
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
  <?php

  // 13 - FORMULARIO (control textarea)
  echo "<h1>13 - FORMULARIO (control textarea)</h1>";
  ?>
  <form action="pages/contrato.php" method="post">
    <label for="contratoTextArea">Contrato:</label><br>
    <textarea id="contratoTextArea" name="contrato" rows="8" cols="80">En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
    </textarea>
    <br>
    <input type="submit" />
  </form>

  <?php

  // 14 - Vectores (tradicionales)
  echo "<h1>14 - Vectores (tradicionales)</h1>";
  $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
  echo "<p>El primer elemento es $dias[0]</p>";
  $last_element_index = count($dias) - 1;
  echo "<p>El último elemento es $dias[$last_element_index]</p>";

  // 15 - Creación de un archivo de texto.
  echo "<h1></h1>";
  ?>
  <form action="pages/pedido.php" method="post">
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
  <?php

  // 16 - Lectura de un archivo de texto.
  echo "<h1>16 - Lectura de un archivo de texto.</h1>";
  if (
    $ar_pedido = fopen("./pages/pedido.txt", "r")
  ) {
    while (!feof($ar_pedido)) {
      $linea = fgets($ar_pedido);
      $lineasalto = nl2br($linea);
      echo $lineasalto;
    }
    fclose($ar_pedido);
  } else {
    echo "No existe el archivo";
  }

  // 17 - Vectores (asociativos)
  echo "<h1>17 - Vectores (asociativos)</h1>";
  $clavesAcceso = array(
    "Lautaro" => "3fjdcioj8jsdfdf",
    "Marcos" => "ADjf8cdASD",
    "Santiago" => "fdsdv9sfds",
    "Matias" => "asdad3eewfwfsda<d",
    "Joaquin" => "dsfvaidf"
  );
  echo "La clave de Marcos es: $clavesAcceso[Marcos]";


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

</body>

</html>
