<?php 

// echo "<pre>";

// var_dump($_FILES);

// echo "</pre>";

$imageName = $_FILES["image"]["name"];
$imagePath = $_FILES["image"]["tmp_name"];
$uploadedPictures = "./upload-images/$imageName";

move_uploaded_file($imagePath, $uploadedPictures);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra la imagen</title>
</head>
<body>
    
    <img src="<?= $uploadedPictures ?>" alt="<?= $imageName ?>">

</body>
</html>