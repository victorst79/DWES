<?php
    $cadena = $_POST["cadena"];
    $sexo = $_POST["sexo"];
    $extras = $_POST["extra"];
    $archivo = $_FILES["archivo"]["name"];
    $pass = $_POST["contrasena"];
    $color = $_POST["color"];
    $idioma = $_POST["idioma"];
    $texto = $_POST["comentario"];

    echo("<h1></h1>");
    // Cadena
    echo("Cadena introducida para buscar: ".$cadena."<br>");
    // Sexo
    echo("Sexo: ".$sexo."<br>");
    // Extra
    if(empty($extras)){
        echo("No has seleccionado ningun extra");
    }else{
        $N = count($extras);

        echo("Extras : ");
        for($i=0; $i < $N; $i++){
            echo($extras[$i] . ", ");
        }
    }
    echo("<br>");
    // Archivo
    echo("Nombre del archivo: ".$archivo."<br>");
    // Contraseña
    echo("Contraseña: ".$pass."<br>");
    // Color
    echo("Color: ".$color."<br>");
    // Idioma
    echo("Idioma: ".$idioma."<br>");
    // Textarea
    echo("Comentario: ".$texto."<br>");
?>