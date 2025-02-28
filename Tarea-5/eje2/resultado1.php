<style>
    body{
        color: aliceblue;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    img{
        height: 200px;
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

$url = "https://api.agify.io/?name={$nombre}";


$respuesta = file_get_contents ($url);

$respuesta = json_decode($respuesta);


echo "<h1 class='title'>Resultado</h1>";

echo "<h3>Nombre: {$nombre}</h3>";

echo "<h3>Edad Estimada : {$respuesta->age} Años</h3>";

if($respuesta->age <= 40){
    echo "<h3> {$nombre} es joven. . . </h3>";
    echo "<img src='https://www.coldelvalle.edu.mx/wp-content/uploads/2022/05/11.-Co%CC%81mo-motivar-a-jo%CC%81venes-de-secundaria-min-scaled.jpg' alt='IMAGEN'>";
}

elseif($respuesta->age > 40 && $respuesta->age <= 50){
    echo "<h3> {$nombre} es mayor. . . </h3>";
    echo "<img src='https://centromedicorespirar.com/wp-content/uploads/2022/08/anciano1.jpg' alt='IMAGEN'>";

}
else{
    echo "<h3> {$nombre} es Anciano/Anciana. . . </h3>";
    echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1Mzx-Pg4YHZCu-Yj7BzfmuF97CiBqkieoeg&s' alt='IMAGEN'>";
}


?>