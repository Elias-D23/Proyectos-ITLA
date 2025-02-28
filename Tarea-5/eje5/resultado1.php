<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.pokemon-image {
    min-width: 100px;
    margin-bottom: 10px;
}
</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['pokemon'])) {
    echo "No se ha ingresado el nombre del Pokémon.";
    exit();
}

$pokemon = strtolower($_POST['pokemon']); // Convertir a minúsculas
$url = "https://pokeapi.co/api/v2/pokemon/{$pokemon}";

$respuesta = file_get_contents($url);
$pokemonData = json_decode($respuesta);

if ($pokemonData) {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Información de {$pokemon}</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Información de " . ucfirst($pokemon) . "</h1>"; // Capitalizar el nombre

    if (isset($pokemonData->sprites->front_default)) {
        echo "<img src='{$pokemonData->sprites->front_default}' alt='{$pokemon}' class='pokemon-image'>";
    }

    if (isset($pokemonData->base_experience)) {
        echo "<p>Experiencia base: {$pokemonData->base_experience}</p>";
    }

    if (isset($pokemonData->abilities) && is_array($pokemonData->abilities)) {
        echo "<h2>Habilidades:</h2>";
        echo "<ul>";
        foreach ($pokemonData->abilities as $ability) {
            echo "<li>{$ability->ability->name}</li>";
        }
        echo "</ul>";
    }
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No se encontró el Pokémon.";
}

?>