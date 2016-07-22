<?php

session_start();

if (isset($_SESSION['nombre'])){
        echo "<p> Hola usuario:(" . $_SESSION['nombre']. ") [<a href='session_out.php#'>Salir</a>]</p>";
        }
    else{
        echo "not loged";
    }


?>


<!DOCTYPE html>
<html lang "es">
<head>
    <meta charset ="utf-8">
    <title>Taller de login & Log out</title>
  </head>

  <body>
    <form  action="session.php" autocomplete="on" method ="post">
        <p>
        <label for="nombre" class="nombre" data-icon="p"> Nombre </label>
        <input id="pass" name="pass" required="required" /> 
        </p>

        <!-- Boton de ENVIAR DATOS LOGIN -->
        <p class="login button"> 
            <input type="submit" value="Enviar" /> 
        </p>
    </form>


  </body>

