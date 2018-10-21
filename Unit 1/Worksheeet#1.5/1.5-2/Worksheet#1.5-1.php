<?php
    $texto = "uno-dos-tres-cuatro-cinco";
    $cadena = explode("-",$texto);

    echo "<ul>";
    for($i = 0; $i <= count($cadena)-1;$i++){
        echo "<li>$cadena[$i]</li>";
    }
    echo "</ul>";

?>