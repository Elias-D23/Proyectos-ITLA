<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .generated-image {
        max-width: 500px;
        margin-bottom: 20px;
    }
</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['keyword'])) {
    echo "No se ha ingresado la palabra clave.";
    exit();
}

$keyword = $_POST['keyword'];
$apiKey = "WPkLapJzIIN3rI0H9P5LBn4s33HzNZpAiQximFbenJs";

$url = "https://api.unsplash.com/photos/random?query={$keyword}&client_id={$apiKey}";

$respuesta = file_get_contents($url);
$imageData = json_decode($respuesta);

if ($imageData && isset($imageData->urls->regular)) {
    $imageUrl = $imageData->urls->regular;

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Imagen Generada</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Imagen Generada para '{$keyword}'</h1>";
    echo "<img src='{$imageUrl}' alt='Imagen generada' class='generated-image'>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No se pudo generar la imagen.";
}

?>