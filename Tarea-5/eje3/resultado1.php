<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!$_POST || !isset($_POST['nombre'])) {
    echo "No se ha enviado el nombre";
    exit();
}
$nombre = $_POST['nombre'];
$url = "http://universities.hipolabs.com/search?country={$nombre}";
$respuesta = file_get_contents ($url);
$universidades = json_decode($respuesta);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <h1>Universidades en <?php echo htmlspecialchars($nombre); ?></h1>

    <?php if (!empty($universidades) && is_array($universidades)): ?>
        <ol>
            <?php foreach ($universidades as $universidad): ?>
                <li class="table">
                    <strong><?php echo htmlspecialchars($universidad->name); ?></strong><br>
                    Dominio: <?php echo implode(", ", $universidad->domains); ?><br>
                    <a href="<?php echo $universidad->web_pages[0]; ?>" target="_blank">Página web</a>
                </li>
            <?php endforeach; ?>
        </ol>
    <?php else: ?>
        <p>No se encontraron universidades para este país.</p>
    <?php endif; ?>

</body>
