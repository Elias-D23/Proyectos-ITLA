<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();

?>

<style>
    body{
        color: antiquewhite;
    }
</style>

<h1>Ejercicio 1 </h1>
<h3>🧬Prediccion de Genero🧬</h3>

<form action="resultado1.php" method="post" target="resultado">
    <legend>Nombre:</legend>

    <div class="mb-3">
        <!-- <label for="inputGenero" class="form-label"> Nombre: </label> -->
        <input type="text" class="form-control" id="inputGenero" name="nombre" placeholder="Ingrese el nombre de la Universidad" required>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<iframe name='resultado' style="width:90%; height:300px;"></iframe>

<script>
    window.onload = function(){
        page = document.querySelector('body');
        // page.style.background = "url('https://st4.depositphotos.com/5739646/30223/v/450/depositphotos_302237292-stock-illustration-versus-vs-letters-fight-backgrounds.jpg')";
        page.style.background = "linear-gradient(rgba(0,0,0,0.4), rgba(0, 0, 0, 0.4)), url('https://st4.depositphotos.com/5739646/30223/v/450/depositphotos_302237292-stock-illustration-versus-vs-letters-fight-backgrounds.jpg')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
</script>