<?php 

    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    } 

    $value = (int)readline();
    $position = (int)readline();


    function ArrayPrint($arr){
        echo "[";
        for ($i=0; $i < count($arr); $i++) { 
            echo "$arr[$i]";
            if ($i < count($arr)-1) {
                echo ", ";
            }
        }
        echo "]";
    }

    for ($i=count($arr)-1; $i > $position; $i--) { 
        $arr[$i] = $arr[$i-1];
    }

    $arr[$position] = $value;

    ArrayPrint($arr)



?>