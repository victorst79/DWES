<?php
    function vista(){
        $type = "mysql";
        $host = "localhost";
        $nombre_de_base = "comentarios";
        $usuario = "root";
        $contrasena = "";

        try{
            $conexion = new PDO('mysql:host='.$host.';dbname='.$nombre_de_base, $usuario, $contrasena);
            $sql = "SELECT *FROM comentarios";
            $res = $conexion->query($sql);

            echo "<h1>Comentarios recibidos</h1>";
            foreach($res as $value) {
                echo "<h4>Nombre: $value[0]</h4> Comentario: $value[1]<br><br>";
                echo "<hr>";
            }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        echo "<a href='./../index.html'>Volver a comentar</a>";
    }

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
?>