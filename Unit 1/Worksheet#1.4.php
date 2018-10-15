<?php
   $frase = "Esta cadena tiene muchas letras";

   echo "<h1>Worksheet#1.4</h1>";
   echo "<h3>Position of the first time 'a' appears</h3>";
   
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
    for ($i=strlen($cadena)-1; $i >= 0; $i--) {
        if($cadena[$i] == $letra){
            echo "The letter $letra appears in the position $i by the end";
            return null;
        }
    }
   }

   primeraLetraInversa($frase,"a");

   
?>