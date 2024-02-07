<?php

$soy_rico = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    
    <!-- ESTO NO SE DEBE HACER -->

    <h1>Esto no se debe hacer</h1>

    <?php if ($soy_rico) { 

        echo "<b>😞</b>";
    }
    else {

        echo "<b>😃</b>";

    }


    ?> 

    <!-- ESTO ES ACEPTABLE -->

    <h1>Esto es aceptable</h1>

    <?php if($soy_rico) {?>
        <b>😞</b>
    <?php } else {?>
        <b>😃</b>
        <?php } ?>

    <!-- ESTO ES COMO SE DEBE HACER -->

    <h1>Esto sí deberías hacerlo</h1>

    <?php if($soy_rico): ?>
        <b>😞</b>
    <?php else: ?>
        <b>😃</b>
    <?php endif; ?>


</body>
</html>