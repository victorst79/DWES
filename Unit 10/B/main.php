<?php

    function insertar($nombre,$comentario){
        $type = "mysql";
        $host = "localhost";
        $nombre_de_base = "comentarios";
        $usuario = "root";
        $contrasena = "";       

        try{
            $conexion = new PDO('mysql:host='.$host.';dbname='.$nombre_de_base, $usuario, $contrasena);
            $sql = "INSERT INTO comentarios VALUES ('$nombre','$comentario')";
            $conexion->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    insertar($_POST['usuario'],$_POST['comentario']);
    echo "Comentario enviado <br>";
    echo "<a href='./view/vista.php'>Ver Comentarios</a>"
?>