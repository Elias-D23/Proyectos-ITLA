<?php
require_once '../Libreria/motor.php';
plantilla::aplicar();

?>
<style>
  body{
    color: aliceblue;
  }
</style>
<h1>Ejercicio 4 </h1>
<h3> Clima en República Dominicana 🌦️</h3>

<h1>Clima Actual</h1>

    <form action="resultado1.php" method="post" target="resultado" id="climaForm">
        <!-- <label for="city">Ciudad:</label><br> -->
        <legend>Nombre:</legend>
        <input type="text" id="city" name="city" class="form-control" placeholder="Ingrese el nombre de la Ciudad" required><br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<iframe name='resultado' style="width:80%; height:300px; border-radius:10px"></iframe>

<script>
        document.getElementById('climaForm').addEventListener('submit', function(event) {
            let countryInput = document.getElementById('city');
            countryInput.value = countryInput.value.replace(/ /g, '+');
        });

        window.onload = function(){
        page = document.querySelector('body');
        page.style.background = "linear-gradient(rgba(0,0,0,0.6), rgba(0, 0, 0, 0.6)), url('https://www.infobae.com/new-resizer/XGpdfQpy7XYNrv-otpMMC6hjaFE=/arc-anglerfish-arc2-prod-infobae/public/IB5S4STV3FCAHFU5WIN66KP4Q4.jpg')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";
    }
    </script>