<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }

    sort($arr);
    $median = 0;
    if (count($arr)%2 == 0) {
        $median = ($arr[count($arr)/2-1]+$arr[count($arr)/2])/2;
    }
    else {
        $median = $arr[count($arr)/2+1];
    }

    echo $median;

?>