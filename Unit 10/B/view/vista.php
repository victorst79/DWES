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

            foreach($res as $value) {
                echo "Nombre: $value[0] <br> Comentario: $value[1]<br><br>";
            }
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    vista();
?>