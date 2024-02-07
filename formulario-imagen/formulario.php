<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de imágenes</title>
</head>
<body>
    
<form action="./server.php" method="post" enctype="multipart/form-data">

    <label for="username">Nombre:</label>
    <input type="text" name="username" id="username">

    <label for="image">Edad:</label>
    <input type="file" name="image" id="image">

    <button type="submit">Enviar</button>

</form>

</body>
</html>