<?php
session_start();

$_SESSION['nombre'] = $_POST['pass'];
//$_SESSION['apellido'] = $_POST['apellido'];
echo "Loged: " .$_SESSION['pass'];
//echo "variable:" . $_SESSION['apellido'];
?>


<br>
<a href="index.php#">Volver</a>


