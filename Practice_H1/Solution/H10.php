<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }
    $min = PHP_INT_MAX;
    // echo $min;
   
    for ($i=0; $i < count($arr); $i++) { 
       if ($min>$arr[$i]) {
        $min = $arr[$i];
       }
    }
    echo $min;

?>