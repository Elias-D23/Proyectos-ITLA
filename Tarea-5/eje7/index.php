<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();
?>

<style>
    body{
        color: aliceblue;
    }
</style>

<h1>Ejercicio 7 </h1>
<h3> Conversión de Monedas 🪙.</h3>
    <form action="resultado1.php" method="post" target="resultado">
        <!-- <label for="city">Ciudad:</label><br> -->
        <legend>Cantidad:</legend>
        <input type="number" id="amount" name="amount" class="form-control" placeholder="Ingrese moneda de US." required><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<iframe name='resultado' style="width:80%; height:450px; border-radius:10px"></iframe>

<script>

        window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://libertex.org/sites/default/files/styles/blog_detail_hero/public/2024-08/currency-conversion-main.jpg?itok=x0Wi4wm4')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script> 