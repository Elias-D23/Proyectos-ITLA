<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['city'])) {
    echo "No se ha ingresado la ciudad.";
    exit();
}

$city = $_POST['city'];

$url = "https://wttr.in/Dominican%20Republic,{$city}?format=4";

$url_img = "https://wttr.in/Dominican%20Republic,{$city}.png?0";


$respuesta = file_get_contents($url);


if ($respuesta) {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Clima en {$city}</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Clima en {$city}</h1>";
    echo "<pre>"; 
    echo "<h2> {$respuesta} </h2>"; 
    echo "</pre>";
    echo "<img src='{$url_img}' alt='IMAGEN'>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No se pudo obtener el clima para {$city}.";
}

?>