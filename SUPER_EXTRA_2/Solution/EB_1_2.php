<?php 
    $n = (int)readline();
    $arr = array();
    for ($i=0; $i < $n; $i++) { 
        $arr[$i] = (int)readline();
    }

    $sum = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $sum = $sum + $arr[$i];
    }

    sort($arr);
    $avg = $sum/$n;
    $min = $arr[0];
    $max = $arr[count($arr)-1];

    echo "$avg\n";
    echo "$min\n";
    echo "$max";

?>