<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }
    $mul = 1;
    for ($i=1; $i < count($arr); $i++) { 
        $mul = $mul * $arr[$i];
    }
    echo $mul;


?>