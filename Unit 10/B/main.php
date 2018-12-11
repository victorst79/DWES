<?php

    require('./model/model.php');
    require('./controller/conexiones.php');

    session_start();
    if (!isset($_SESSION['nombre'])) {
        $_SESSION['nombre'] = $_POST['usuario'];
    } else {
        echo "Tu nombre de usuario es: ".$_SESSION['nombre'];
        echo "Tu id de sesion es: ".session_id();
    }
    
    

    insertar($_POST['usuario'],$_POST['comentario']);
    echo "Comentario enviado <br>";
    echo "<a href='./view/vista.php'>Ver Comentarios</a>"
?>