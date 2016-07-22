<?php
if (isset($_COOKIE['nombreUsuario'])){
    echo 'Valor de la Cookie '. $_COOKIE['nombreUsuario'];
}else{
    echo 'No hay Cookies';
}
?>