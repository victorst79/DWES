<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Worksheet 7 - Funciones, Ficheros y Formularios</title>
</head>
<body>
    <?php
        // EXERCISE 5
        echo("<h3>Ejercicio 5 - Array bidimensional asociativo</h3>");
        $peliculas = array();
        $peliculas["Ciencia Ficcion"] = array('Pelicula 1' => 'Alien', 'Pelicula 2' => 'Terminator 2', 'Pelicula 3' => 'La guerra de las galaxias');
        $peliculas["Accion"] = array('Pelicula 1' => 'El caballero oscuro', 'Pelicula 2' => 'El precio del poder', 'Pelicula 3' => 'Rocky');
        $peliculas["Aventuras"] = array('Pelicula 1' => 'El Rey León ', 'Pelicula 2' => 'El Señor de los Anillos', 'Pelicula 3' => 'Gladiator');
        foreach ($peliculas as $genero => $value) {
            echo("<h3>Genero: $genero</h3>");
            foreach ($value as $keys => $values) {
                echo("Pelicula: $values <br>");
            }
        }

        // EXERCISE 6
        echo("<h3>Ejercicio 6 - Contador</h3>");
        $fecha_evento="2019-02-08 00:00:00";
        $segundos=strtotime($fecha_evento) - strtotime('now');
        $diferencia_dias=intval($segundos/60/60/24);
        $diferencia_horas=intval($segundos/60/60);
        $diferencia_minutos=intval($segundos/60);
        echo "La cantidad de días entre el ".$fecha_evento." y hoy es <b>".$diferencia_dias." dias, $diferencia_horas horas, $diferencia_minutos minutos, $segundos segundos</b>";
    ?>
    <h3>Ejercicio 7 y 8</h3>
    <form action="#" method="POST">
        <label>Operacion</label>
        <br>
        <input type="text" name="operacion">
        <br>
        <label>Valor 1</label>
        <br>
        <input type="text" name="value1">
        <br>
        <label>Valor 2</label>
        <br>
        <input type="text" name="value2">
        <br>
        <input type="hidden" name="incrementar">
        <input type="submit" name="enviar" value="Calcular">
    </form>
    <?php
        if(isset($_POST["enviar"])){
            if(isset($_POST["incrementar"])){
                $countC = 0;
                $handleC = fopen("./count.txt","a+");
                fwrite($handleC,"0"."\r\n");
                fclose($handleC);
                $handleR = fopen("./count.txt","r");
                while (!feof($handleR)){
                    $line = fgets($handleR);
                    $countC++;
                }
                fclose($handleR);
                echo("Numero de interacciones: ".$countC."<br>");           
            }
            $operacion = $_POST["operacion"];
            if($operacion == "suma"){
                $resultado = $_POST["value1"] + $_POST["value2"];
                echo("La suma ".$_POST["value1"]." + ".$_POST["value2"]." de es $resultado");
            }else if($operacion == "resta"){
                $resultado = $_POST["value1"] - $_POST["value2"];
                echo("La resta ".$_POST["value1"]." - ".$_POST["value2"]." de es $resultado");
            }else if($operacion == "multiplicar"){
                $resultado = $_POST["value1"] * $_POST["value2"];
                echo("La multiplicacion ".$_POST["value1"]." x ".$_POST["value2"]." de es $resultado");
            }else if($operacion == "dividir"){
                $resultado = $_POST["value1"] / $_POST["value2"];
                echo("La division ".$_POST["value1"]." / ".$_POST["value2"]." de es $resultado");
            }else{
                echo("Parametro invalido");
            }
        }
    ?>
    <h3>Ejercicio 9</h3>
    <form action="#" method="<?php echo($_SERVER['PHP_SELF']); ?>">
        <label>Numero a adivinar</label>
        <br>
        <input type="number">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        $count9 = 0;
        echo("Intento: ".$count9);
    ?>
</body>
</html>