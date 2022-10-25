<?php 
    $num = array();
    for ($i=0; $i < 3; $i++) { 
        $num[$i] = (float)readline();
    }
    $sum = 0;
    for ($i=0; $i < 3; $i++) { 
        $sum = $sum+$num[$i];
    }
    $avg = $sum/3;

    echo $sum."\n";
    echo $avg;






?>