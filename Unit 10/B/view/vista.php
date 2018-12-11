<?php
    require('./../model/model.php');
    require('./../controller/conexiones.php');

    session_start();
    if (!isset($_SESSION['nombre'])) {
    } else {
        echo "Tu nombre de usuario es: ".$_SESSION['nombre']."<br>";
        echo "Tu id de sesion es: ".session_id()."<br>";
    }

    vista();
    session_destroy();
?>