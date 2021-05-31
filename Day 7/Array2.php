<?php

    //Associative Array
    //Key = Value
    //Method 1
    echo "<h1>Method 1</h1>";
    $a[0] = 10;
    $a['A'] = "Ayush";
    $a['php'] = "Web Development";
    $a[10] = "Ten";
    $a[50] = 50.50;
    foreach($a as $value){
        echo "<br/>Value is $value";
    }

    echo "<br/>";

    //Method 2
    echo "<h1>Method 2</h1>";
    $b = array(
        0 => 10,
        "A" => "Ayush",
        "php" => "Web Development",
        10 => "Ten",
        50 => 50.50
    );
    foreach($b as $key => $value){
        echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
    }

?>