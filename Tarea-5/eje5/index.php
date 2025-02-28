<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();

?>
<style>
body{
    color: aliceblue;
}
</style>
<h1>Ejercicio 5 </h1>
<h3>🌎Mundo pokemon.</h3>

<h1>🔎Información</h1>

    <form action="resultado1.php" method="post" target="resultado" id="pokeForm">
        <!-- <label for="city">Ciudad:</label><br> -->
        <legend>Pokémon:</legend>
        <input type="text" id="pokemon" name="pokemon" class="form-control" placeholder="Ingrese el nombre del Pokemon" required><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<iframe name='resultado' style="width:60%; height:450px; border-radius:10px"></iframe>

<script>

        window.onload = function(){
        page = document.querySelector('body');
        // page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://assets.nintendo.eu/image/private/f_auto,c_limit,w_1920,q_auto:low/mkrauslhughhtnvnvfcw')";
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://wallpapers.com/images/featured/pokemon-hd-fazqcs1tmwwte1ap.jpg')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script>