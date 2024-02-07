<?php 

$usuarios = array(

    array(
    "id" => 0,
    "username" => "Juan"
    ),

    array(
        "id" => 1,
        "username" => "Carlos"
    ),

    array(
        "id" => 2,
        "username" => "Jose"
    ),

);

$edad = 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JavaScript</title>
</head>
<body>
    
<script>

    let users = JSON.parse('<?= json_encode($usuarios) ?>');

    let edadDePepito = <?= $edad?>;
</script>

<script src="./index.js"></script>

</body>
</html>