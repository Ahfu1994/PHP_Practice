<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }

    $sum = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $sum = $sum + $arr[$i];
    }
    // echo $sum;

    sort($arr);

    $avg = $sum/count($arr);
    $max = $arr[count($arr)-1];
    $min = $arr[0];

    echo "$avg\n";
    echo "$min\n";
    echo "$max";


?>
