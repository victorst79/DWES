<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label>Usuario</label>
        <br>
        <input type="text" name="usuario">
        <br>
        <label>Contraseña</label>
        <br>
        <input type="password" name="password">
        <br>
        <label>E-Mail</label>
        <br>
        <input type="email" name="email">
        <br>
        <input type="submit" name="envio">
        <input type="reset">
    </form>
    
    <?php
         $users = array();   

        function creacionUsuario($usuario,$pass,$email){
            $users[$usuario] = [
                "Contraseña" => $pass,
                "Email" => $email
            ];
        }

        if(isset($_POST["envio"])){
            $usuario = $_POST["usuario"];
            $pass = $_POST["password"];
            $email = $_POST["email"];

            creacionUsuario($usuario,$pass,$email);
        }
    ?>
</body>
</html>