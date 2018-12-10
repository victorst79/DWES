<?php 
    require_once './model/conexion.php';

    function getId(){
        $id = 0;

        $type = "mysql";
        $host = "localhost";
        $nombre_de_base = "instituto";
        $usuario = "root";
        $contrasena = "";

        $conexion = new PDO('mysql:host='.$host.';dbname='.$nombre_de_base, $usuario, $contrasena);
        $sql = 'SELECT idEstudiante 
                FROM instituto 
                ORDER BY idEstudiante DESC 
                LIMIT 1';
        $res = $conexion->query($sql);
        
        foreach ($res as $fila) {
            $id = $fila[0];
        }

        return $id;
    }
    

    function insertar($nombre,$apellidos,$email,$telefono,$tutor,$grupo,$fecha,$id){
        $type = "mysql";
        $host = "localhost";
        $nombre_de_base = "instituto";
        $usuario = "root";
        $contrasena = "";
        $id = $id + 1;

        

        try{
            $conexion = new PDO('mysql:host='.$host.';dbname='.$nombre_de_base, $usuario, $contrasena);
            $sql = "INSERT INTO instituto VALUES ('$nombre','$apellidos','$email',$telefono,'$tutor','$grupo','$fecha',$id)";
            $conexion->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    function consulta(){
        $type = "mysql";
        $host = "localhost";
        $nombre_de_base = "instituto";
        $usuario = "root";
        $contrasena = "";

        $conexion = new PDO('mysql:host='.$host.';dbname='.$nombre_de_base, $usuario, $contrasena);
        $sql = "SELECT nombre, apellidos
                FROM instituto
                ORDER BY apellidos DESC";
        $res = $conexion->query($sql);

        foreach ($res as $value) {
            echo "Nombre: $value[0], Apellidos: $value[1]<br>";
        }
    }

    $id = getId();
    if($_POST["enviar"] == "Registrar"){
        insertar($_POST['nombre'],$_POST['apellidos'],$_POST['email'],$_POST['telefono'],$_POST['tutor'],$_POST['grupo'],$_POST['fecha'],$id);
        consulta();
    }else{
        echo "Algo salio mal";
    }
?>

<!-- INSERT INTO instituto
VALUE ('Pepe','Palote','pepe@gmail.com',987654123,'Paco','2DAW','9/12/2018') -->