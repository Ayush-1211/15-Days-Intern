<?php

    //Numerical Array
    //Method 1
    echo "<h1>Method 1</h1>";
    $a[0] = 10;
    $a[1] = 20;
    $a[2] = 50.50;
    $a[3] = "A";
    $a[4] = "4";
    for($i=0; $i< count($a); $i++){
        echo "<br/>$a[$i]";
    }

    echo "<br/>";

    //Index Dynamic Array
    //Method 2
    echo "<h1>Method 2</h1>";
    $b[] = 10;
    $b[] = 20;
    $b[] = 50.50;
    $b[] = "A";
    $b[] = "4";
    for($i=0; $i< count($b); $i++){
        echo "<br/>$b[$i]";
    }

    echo "<br/>";

    //Method 3
    echo "<h1>Method 3</h1>";
    $c = array(10, 20, 30, "C", "C++", 50.50);
    for($i=0; $i<count($c); $i++){
        echo "<br/>$c[$i]";
    }

?>