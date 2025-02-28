<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();

?>

<style>
  body{
    color: aliceblue;
  }
</style>
<h1>Ejercicio 3 </h1>
<h3> Universidades de un país 🎓</h3>

<form action="resultado1.php" method="post" target="resultado" id="countryForm">
    <legend>Nombre:</legend>

    <div class="mb-3">
        <!-- <label for="inputGenero" class="form-label"> Nombre: </label> -->
        <input type="text" class="form-control" id="name" name="nombre" placeholder="Ingrese su nombre" required>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<iframe name='resultado' style="width:80%; height:300px; border-radius:10px"></iframe>


<script>
        document.getElementById('countryForm').addEventListener('submit', function(event) {
            let countryInput = document.getElementById('name');
            countryInput.value = countryInput.value.replace(/ /g, '+');
        });

        window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://media.gettyimages.com/id/2122148349/es/foto/hacer-un-examen-en-la-universidad.jpg?s=612x612&w=gi&k=20&c=r7Se-ImnYD8iPkgHP7QyICj2VNqrke46TJjoCxqOsjM=')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script>