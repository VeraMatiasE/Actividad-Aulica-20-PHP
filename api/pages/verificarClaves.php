<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Aulica 18</title>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
    <h1>Verificación de Claves</h1>
    <?php

    function verificarClaves($clave1, $clave2)
    {
        if ($clave1 != $clave2)
            echo "Las claves ingresadas son distintas";
    }

    verificarClaves($_REQUEST['clave1'], $_REQUEST['clave2']);

    ?>

</body>

</html>