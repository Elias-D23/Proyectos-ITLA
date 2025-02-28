<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = "https://official-joke-api.appspot.com/random_joke";

$respuesta = file_get_contents($url);
$jokeData = json_decode($respuesta);

if ($jokeData && isset($jokeData->setup) && isset($jokeData->punchline)) {
    $setup = $jokeData->setup;
    $punchline = $jokeData->punchline;
} else {
    $setup = "No se pudo obtener el chiste.";
    $punchline = "";
}
?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f0f0;
        min-height: 100vh;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-top: 30px;

    }

    .setup {
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .punchline {
        font-style: italic;
    }
</style>

<h1>Ejercicio 10 </h1>
<h3> Generador de chistes 🤣.</h3>
 
<div class="container"
    <h1>Chiste Aleatorio</h1>
    <p class="setup"><?php echo htmlspecialchars($setup); ?></p>
    <?php if ($punchline !== ""): ?>
        <p class="punchline"><?php echo htmlspecialchars($punchline); ?></p>
    <?php endif; ?>
</div>


<script>

        window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1ciR8Y_glDgXatpT1BL58qQUN_AjK22I18w&s')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script> 