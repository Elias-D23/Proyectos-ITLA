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

    img {
        width: 30px;
        height: 30px;
        vertical-align: middle;
        margin-right: 5px;
    }
</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['amount'])) {
    echo "No se ha ingresado la cantidad en USD.";
    exit();
}

$amount = $_POST['amount'];

$url = "https://api.exchangerate-api.com/v4/latest/USD";

$respuesta = file_get_contents($url);
$conversionData = json_decode($respuesta);

if ($conversionData && isset($conversionData->rates)) {
    $dopRate = $conversionData->rates->DOP;
    $eurRate = $conversionData->rates->EUR;
    $gbpRate = $conversionData->rates->GBP;

    $dopAmount = $amount * $dopRate;
    $eurAmount = $amount * $eurRate;
    $gbpAmount = $amount * $gbpRate;

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Resultados de la Conversión</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h1>Resultados de la Conversión</h1>";
    echo "<p>{$amount} USD es igual a:</p>";
    echo "<p><img src='https://images.squarespace-cdn.com/content/v1/581b293d893fc0c77e4007ec/1494340642514-RWA0XO66JJMQZ9K0GSL0/V+Centenario+del+Descubrimiento+y+Evangelizaci%C3%B3n+de+Am%C3%A9rica.+1988.+500+pesos.+Rep%C3%BAblica+Dominicana' alt='DOP'> {$dopAmount} DOP</p>";
    echo "<p><img src='data:image/jpeg;base64,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' alt='EUR'> {$eurAmount} EUR</p>";
    echo "<p><img src='https://cdn.billowshop.com/57f0dd93-7e22-7738-ef65-bbb21545dbf4/img/Producto/22658705-92cf-7015-be65-7e94d56ecc5d/LIBRA-ELIZABETH-II-637253ffe878c.jpg' alt='GBP'> {$gbpAmount} GBP</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No se pudieron obtener las tasas de cambio.";
}

?>