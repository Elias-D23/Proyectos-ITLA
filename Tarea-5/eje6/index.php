<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();

?>

<style>

body{
     color: aliceblue; 
}

</style>
<h1>Ejercicio 6 </h1>
<h3>Noticias desde WordPress 📰.</h3>

<h1>Información</h1>

    <form action="resultado1.php" method="post" target="resultado">
        <!-- <label for="city">Ciudad:</label><br> -->
        <legend>Pagina:</legend>
        <input type="url" id="url" name="url" class="form-control" placeholder="Ingrese el nombre del Pokemon" required><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<iframe name='resultado' style="width:80%; height:450px; border-radius:10px"></iframe>

<script>

        window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://eldinero.com.do/wp-content/uploads/nota-que-es-wordpress-quickpixel.jpg')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script> 