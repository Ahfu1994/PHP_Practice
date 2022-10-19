<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
       $arr[$i] = (int)readline();
    }

    // $sum = 0;
    // for ($i=0; $i < count($arr); $i++) { 
    //     $sum = $sum + $arr[$i];
    // }

    // echo $sum;

    $count = 0;
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i]%2 == 0) {
            $count++;
        }
    }
    if ($count > 1) {
        echo "have";
        exit;
    }
    else { 
        echo "don't have";
    }



?>