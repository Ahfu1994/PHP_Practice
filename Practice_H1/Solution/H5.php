<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }
    $count = 0;
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i]%2 == 0) {
            $count++;
        }
    }

    echo $count;




?>