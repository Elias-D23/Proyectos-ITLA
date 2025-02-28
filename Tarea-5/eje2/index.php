<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();

?>

<style>
  body{
    color: aliceblue;
  }
</style>

<h1>Ejercicio 2 </h1>
<h3> Predicción de edad 🎂</h3>

<form action="resultado1.php" method="post" target="resultado">
    <legend>Nombre:</legend>

    <div class="mb-3">
        <!-- <label for="inputGenero" class="form-label"> Nombre: </label> -->
        <input type="text" class="form-control" id="inputGenero" name="nombre" placeholder="Ingrese su nombre" required>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<iframe name='resultado' style="width:90%; height:300px;"></iframe>

<script>
    window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://es.bcdn.biz/images/tests/source/c18e2995-77e6-4d43-9822-fa8c03f7a05d.jpg')";
        page.style.backgroundSize = "contain";
        page.style.backgroundAttachment = "fixed";
    }
</script>