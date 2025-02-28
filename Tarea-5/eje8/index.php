<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();
?>

<style>
    body{
        color: aliceblue;
    }
</style>

<h1>Ejercicio 8 </h1>
<h3> Generador de imágenes con IA 🖼️.</h3>
    <form action="resultado1.php" method="post" target="resultado">
        <legend>Palabra clave:</legend>
        <input type="text" id="keyword" name="keyword" class="form-control" required><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<iframe name='resultado' style="width:80%; height:450px; border-radius:10px"></iframe>

<script>

        window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://images.tech.co/wp-content/uploads/2024/05/13121928/robot-artist-708x400.jpg')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script> 