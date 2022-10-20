<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }

    $max = PHP_INT_MIN;
    $mode = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $countNum = 0;
        
        for ($j=0; $j < count($arr); $j++) { 
            if ($arr[$i] == $arr[$j]) {
                $countNum++;
            }
        }
        if ($countNum > $max) {
            $max = $countNum;
            $mode = $arr[$i];
        }
    }

    echo $mode."\n";
    echo $max;




?>