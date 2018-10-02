<?php
    echo "<h1>Worksheet#1</h1>";

    echo "<h3>Exercise 1</h3>";
    $dias = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    
    echo "<h4>For</h4>";
    for($i = 0; $i <= count($dias)-1; $i++){
        echo $i." => ". $dias[$i]."<br>";
    }

    echo "<h4>Foreach</h4>";
    foreach ($dias as $key => $value) {
        echo $key." => ". $value."<br>";
    }

    echo "<h3>Exercise 2</h3>";
    
    echo "<h4>Slice</h4>";
    
    $students = array("Victor","Jairo","Alejandro","Pepe","Paco");

    $student = array_slice($students, 0, 3); //Extract a slice of the array

    for($i = 0; $i <= count($student)-1; $i++){
        echo $student[$i]." ";
    }
    
    echo "<h4>Splice</h4>";

    $student2 = array_splice($students, 3); //Remove a portion of the array and replace it with something els

    for($i = 0; $i <= count($student2)-1; $i++){
        echo $student2[$i]." ";
    }

    echo "<h3>Exercise 3</h3>";

    $colors = array(array("Sharp Colors","Light Colors")
    ,array("Red: #FF0000","Green: #00FF00","Blue: #0000FF","Pink: #FE9ABC",
    "Yellow: #FDF189","Mallow: #BC8F8F"));

    $sharpC = array_slice($colors[1],0,3);
    $lightC = array_slice($colors[1],3,6);

    print_r($sharpC);
    print_r($lightC);
    echo "<table cellspacing='2' border='1px solid black'>";
    for($i = 0; $i <= count($colors)-1; $i++){
        echo "<tr>";
        echo "<td>".$colors[0][$i]."</td>";
        for($j = 0; $j <= count($colors[$i])-1; $j++){
            echo "<td>".$sharpC[1][$j]."</td>";
            
        }
        echo "</tr>";
    }
    echo "</table>";
?>