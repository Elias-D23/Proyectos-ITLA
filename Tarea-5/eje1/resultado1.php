<style>
    body{
        color: antiquewhite;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['nombre'])) {
    echo "No se ha enviado el nombre";
    exit();
}

$nombre = $_POST['nombre'];

$url = "https://api.genderize.io/?name={$nombre}";

$respuesta = file_get_contents ($url);

$respuesta = json_decode($respuesta);

$respuesta->gender = ($respuesta->gender == 'male') ? 'Masculino' : 'Femenino';

echo "<h1 class='title'>Resultado</h1>";

echo "<h3>Nombre: {$nombre}</h3>";

echo "<h3>Genero mas probable : {$respuesta->gender}</h3>";

echo "<h3> Probabilidad : ". $respuesta->probability * 100 ."% <h3>";

?>