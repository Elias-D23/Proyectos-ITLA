<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style> 
      
      h1{
        padding-top: 30px;
        
      }

      body{
        min-height: 800px;
      }

      .logo{
        height: 60px;
        border-radius:50%;
      }
    </style>
  </head>
<body>

<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"> <img class="logo" src="data:image/png;base64,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" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Acerca_de.php">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ejercicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../eje1/index.php">Ejercicio 1</a></li>
            <li><a class="dropdown-item" href="../eje2/index.php">Ejercicio 2</a></li>
            <li><a class="dropdown-item" href="../eje3/index.php">Ejercicio 3</a></li>
            <li><a class="dropdown-item" href="../eje4/index.php">Ejercicio 4</a></li>
            <li><a class="dropdown-item" href="../eje5/index.php">Ejercicio 5</a></li>
            <li><a class="dropdown-item" href="../eje6/index.php">Ejercicio 6</a></li>
            <li><a class="dropdown-item" href="../eje7/index.php">Ejercicio 7</a></li>
            <li><a class="dropdown-item" href="../eje8/index.php">Ejercicio 8</a></li>
            <li><a class="dropdown-item" href="../eje9/index.php">Ejercicio 9</a></li>
            <li><a class="dropdown-item" href="../eje10/index.php">Ejercicio 10</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<main class="container">
