<?php
    echo "<h1>Prueba inicial PHP</h1>";
    
    echo "<h3>Ejercicio 5</h3>";

    $frase = "La bala mata la vaca";

    function contarVocales($parametro){
        $a = 0;

        for($i = 0; $i <= strlen($parametro)-1;$i++){
            echo $parametro[$i];
            if($parametro[$i] == 'a'){
               $a++; 
            }
        }
        echo " --> Muestra: ".$a;        
        
        $arr = [];
        
        

        for($i = 0; $i <= strlen($parametro)-1;$i++){
            array_push($arr,$parametro[$i]);
        }

        $letras = array_unique($arr);

        // print_r($letras);

        // $resultado = [];

        for($i = 0; $i <= sizeof($letras);$i++){
            // substr_count($arr,$letra[$i]);
        }

    }

    contarVocales($frase);

    echo "<h3>Ejercicio 7</h3>";

    $frase2 = "Hola mundo";

    function duplicarLetra($parametro){
        $arr = [];

        for($i = 0; $i <= strlen($parametro)-1;$i++){
            $arr[$i] = $parametro[$i].$parametro[$i];
        }
        
        for($i = 0; $i <= sizeof($arr)-1;$i++){
            echo $arr[$i];
        }
    }

    duplicarLetra($frase2);
?>
