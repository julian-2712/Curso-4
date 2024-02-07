<?php

$nombre = "Juan";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    
    <?php echo "<b>Hola, esto es una prueba para integrar PHP con HTML</b>"; ?>

    <br><br>

    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>" ?>

    <h1>¡Hola <?= $nombre ?>!</h1>

</body>
</html>