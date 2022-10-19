<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }
    $max = PHP_INT_MIN;
    // echo $max;
    for ($i=0; $i < count($arr); $i++) { 
       if ($arr[$i]>$max) {
        $max = $arr[$i];
       }
    }
    echo $max;


?>