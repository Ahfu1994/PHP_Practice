<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }

    $sum = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $sum = $sum + $arr[$i];
    }
    echo $sum;

?>