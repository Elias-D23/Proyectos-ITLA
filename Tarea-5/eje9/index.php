<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();
?>

<style>
    body{
        color: aliceblue;
    }
</style>

<h1>Ejercicio 9 </h1>
<h3> Datos de un país 🌍.</h3>
    <form action="resultado1.php" method="post" target="resultado">
        <legend>Palabra clave:</legend>
        <input type="text" id="country" name="country" class="form-control" placeholder="Ingrese el nombre del Pais" required><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<iframe name='resultado' style="width:80%; height:450px; border-radius:10px"></iframe>

<script>

        window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://elordenmundial.com/wp-content/uploads/2020/02/27774352598_ed9cfff30a_c.jpg')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script> 