<?php 

/* if ( isset($_POST["nombre"]) && !empty($_POST["nombre"]) ) {
    echo "Hola ". $_POST["nombre"] ."!😄";
}
else {
    echo "No mandaste ningún nombre! 😠";
} */

// Realiza comprobación para ver si se envió el formulario al pulsar sobre el button con name "form"
// Si por ejemplo, accedemos directamente al fichero server.php sin pasar por formulario.php, obtendremos el segundo mensaje
// pues no se llegó a pulsar el botón en formulario.php
if ( isset($_POST["form"]) ) {
    echo "Todo el formulario fue enviado.";
} 
else {
    echo "No se envió el formulario.";
}