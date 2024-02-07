<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con GET</title>
</head>
<body>
    
<form action="./server.php" method="get">

    <label for="username">Nombre:</label>
    <input type="text" name="username" id="username">

    <label for="age">Edad:</label>
    <input type="number" name="age" id="age">

    <button type="submit">Enviar</button>

</form>

</body>
</html>