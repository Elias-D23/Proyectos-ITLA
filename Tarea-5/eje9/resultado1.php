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

    .flag {
        max-width: 200px;
        margin-bottom: 20px;
    }
</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['country'])) {
    echo "No se ha ingresado el nombre del país.";
    exit();
}

$country = $_POST['country'];
$encodedCountry = rawurlencode($country); // Codificar el nombre del país

$url = "https://restcountries.com/v3.1/name/{$encodedCountry}";

$respuesta = file_get_contents($url);
$paisData = json_decode($respuesta);

if ($paisData && is_array($paisData) && count($paisData) > 0) {
    $pais = $paisData[0]; 
    $bandera = $pais->flags->png;
    $capital = implode(", ", $pais->capital);
    $poblacion = number_format($pais->population);
    $moneda = implode(", ", array_keys((array) $pais->currencies));

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Datos de {$country}</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Datos de " . ucfirst($country) . "</h1>";
    echo "<img src='{$bandera}' alt='Bandera de {$country}' class='flag'>";
    echo "<p>Capital: {$capital}</p>";
    echo "<p>Población: {$poblacion}</p>";
    echo "<p>Moneda: {$moneda}</p>";
    echo "<a href='index.html'>Volver</a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No se encontraron datos para el país ingresado.";
}

?>