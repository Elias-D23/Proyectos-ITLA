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
        text-align: left;
        max-width: 800px;
        }

    .noticia {
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
        }

    .noticia h2 {
        margin-bottom: 5px; 
        }
</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['url'])) {
    echo "No se ha ingresado la URL.";
    exit();
}

$url = $_POST['url'];

// Asegurar que la URL termine con '/'
if (substr($url, -1) !== '/') {
    $url .= '/';
}

$apiUrl = $url . "wp-json/wp/v2/posts?per_page=3"; // Obtener las últimas 3 noticias

$respuesta = file_get_contents($apiUrl);
$noticias = json_decode($respuesta);

if ($noticias && is_array($noticias)) {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Noticias</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Últimas Noticias</h1>";

    foreach ($noticias as $noticia) {
        echo "<div class='noticia'>";
        echo "<h2>" . htmlspecialchars($noticia->title->rendered) . "</h2>";
        echo "<p>" . htmlspecialchars(strip_tags(substr($noticia->excerpt->rendered, 0, 200))) . "...</p>"; // Resumen de 200 caracteres
        echo "<a href='" . htmlspecialchars($noticia->link) . "' target='_blank'>Leer más</a>";
        echo "</div>";
    }

    echo "<a href='index.html'>Volver</a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No se pudieron obtener las noticias.";
}

?>