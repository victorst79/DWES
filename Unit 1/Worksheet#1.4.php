<?php
   $frase = "Esta cadena tiene muchas letras";

   echo "<h1>Worksheet#1.4</h1>";
   echo "<h1>Exercise 1</h1>";
   echo "<h3>Position of the first time 'a' appears</h3>";
   
//    $pos = strpos($frase, "a");
//    echo $pos;

   function primeraLetra($cadena,$letra){
       for ($i=0; $i < strlen($cadena) -1; $i++) { 
           if($cadena[$i] == $letra){
                echo "The letter $letra appears in the position $i";
                return null;
           }
       }
   }

   primeraLetra($frase,"a");

   echo "<h3>Position of the first time 'm' appears</h3>";
   //    $pos = strpos($frase, "m");
   //    echo $pos;
   
   primeraLetra($frase,"m");

   echo "<h3>Position of the first time 'tiene' appears</h3>";

   function primeraPalabra($cadena,$palabra){
        $arrCadena = explode(" ",$cadena);
        for ($i=0; $i < count($arrCadena) -1; $i++) { 
            if($arrCadena[$i] == $palabra){
                 echo "The word $palabra appears in the position $i";
                 return null;
            }
        }
   }

   primeraPalabra($frase,"tiene");

   echo "<h3>Position of the first time 'a' appears by the end</h3>";

   function primeraLetraInversa($cadena,$letra){
    //   $result = strripos($frase,"m");

    for ($i=strlen($cadena)-1; $i >= 0; $i--) {
        if($cadena[$i] == $letra){
            echo "The letter $letra appears in the position $i by the end";
            return null;
        }
    }
   }

   primeraLetraInversa($frase,"a");

   echo "<h3>The phrase from the appearance of the word 'cadena' until the end.</h3>";

   function cadenaPrimeraPalabra($frase,$palabra){
       $cadena = stristr($frase,$palabra);
       echo $cadena;
       return null;
   }

   cadenaPrimeraPalabra($frase,"cadena");

   echo "<h3>The phrase from position 12 at the end.</h3>";

   function cadena12($cadena){
       $result = substr($cadena,12,strlen($cadena));
       echo $result;
       return null;
   }

   cadena12($frase);

   echo "<h3>The phrase from position 18 at the 6.</h3>";

   function cadena18y6($cadena){
       $result = substr($cadena,18,6);
       echo $result;
       return null;
   }

   cadena18y6($frase);

   echo "<h3>The phrase from last 6 position.</h3>";

   function cadenaUltimos6($cadena){
       $result = substr($cadena,-6);
       echo $result;
       return null;
   }

   cadenaUltimos6($frase);

   echo "<h3>The phrase from 26 position.</h3>";

   function cadenaUltimos6Final($cadena){
       $result = substr($cadena,-26,6);
       echo $result;
       return null;
   }

   cadenaUltimos6Final($frase);

   echo "<h3>The phrase from 4 position at 7.</h3>";

   function cadenaUltimoFinal($cadena){
       $result = substr($cadena,4,-7);
       echo $result;
       return null;
   }

   cadenaUltimoFinal($frase);

   echo "<h1>Exercise 2</h2>";

   $frase = "Bienvenidos a la aventura de aprender PHP en 30";

   
?>