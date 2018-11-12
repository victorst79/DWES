<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Worksheet 7 - Funciones, Ficheros y Formularios</title>
</head>
<body>
    <?php
        // EXERCISE 5
        $peliculas = array();
        $peliculas["Ciencia Ficcion"] = array('Pelicula 1' => 'Alien', 'Pelicula 2' => 'Terminator 2', 'Pelicula 3' => 'La guerra de las galaxias');
        $peliculas["Accion"] = array('Pelicula 1' => 'El caballero oscuro', 'Pelicula 2' => 'El precio del poder', 'Pelicula 3' => 'Rocky');
        $peliculas["Aventuras"] = array('Pelicula 1' => 'El Rey León ', 'Pelicula 2' => 'El Señor de los Anillos', 'Pelicula 3' => 'Gladiator');
        print_r($peliculas);
        
        foreach ($peliculas as $genero => $value) {
            echo("<h3>Genero: $genero</h3>");
            foreach ($value as $keys => $values) {
                echo("Pelicula: $values <br>");
            }
        }
    ?>
</body>
</html>