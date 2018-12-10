<?php
    echo "<h1>Worksheet#1.3</h1>";

    echo "<h3>Exercise 1</h3>";

    echo "<form action='#' method='POST'>";
        echo "<label>Variable 1</label><br>";
        echo "<input type='text' name='var1'><br>";
        echo "<label>Variable 2</label><br>";
        echo "<input type='text' name='var2'><br>";
        echo "<input type='submit' name='send'>";
    echo "</form>";

    $var1 = substr($_POST['var1'], -3);
    $var2 = substr($_POST['var2'], -3);
    
    if (strcmp($var1, $var2) === 0) {
        echo "The 2 chains rhyme";
    }else{
        echo "The 2 chains dont rhyme";
    }

    echo "<h3>Exercise 2</h3>";

    echo "<form action='#' method='POST'>";
        echo "<label>E-Mail</label><br>";
        echo "<input type='email' name='mail'><br>";
        echo "<input type='submit' name='send'>";
    echo "</form>";

    $domain = explode(".",$_POST['mail']);
    $user = explode("@",$_POST['mail']);
    
    echo 'The domain is '.$domain[1].".<br>";
    echo 'The user is '.$user[0].".<br>";


?>