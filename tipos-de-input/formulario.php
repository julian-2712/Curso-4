<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de input</title>
</head>
<body>
    
<form action="./server.php" method="post" enctype="multipart/form-data">

    <!-- Input simple -->
    <!-- <label for="name">Nombre</label>
    <input type="text" name="name" id="name"> -->

    <!-- Arreglos -->
    <!-- <label>Personas</label>
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">
    <input type="text" name="personas[]"> -->

    <!-- Arreglos asociativos -->
    <!-- <label>Nombre</label>
    <input type="text" name="persona[nombre]">

    <label>Apellido</label>
    <input type="text" name="persona[apellido]">

    <label>Edad</label>
    <input type="text" name="persona[edad]"> -->

    <!-- Checkbox -->
    <!-- <input type="checkbox" name="list1" id="list1">
    <input type="checkbox" name="list2" id="list2" value="Este valor fue clicado" >
    <input type="checkbox" name="list3" id="list3"> -->

    <!-- Radios -->
    <!-- <label for="noruega">Noruega</label>
    <input type="radio" name="pais" value="Noruega" id="noruega">

    <label for="españa">España</label>
    <input type="radio" name="pais" value="España" id="españa">

    <label for="irlanda">Irlanda</label>
    <input type="radio" name="pais" value="Irlanda" id="irlanda"> -->

    <!-- Múltiples archivos -->
    <label for="galeria">Carga tus imágenes:</label>
    <input type="file" multiple name="galeria[]" id="galeria">

    <button type="submit">Enviar</button>

</form>

</body>
</html>