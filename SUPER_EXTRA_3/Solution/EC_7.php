<?php 

    $a = array();
    $b = array();
    $c = array();

    for ($i=0; $i < 10; $i++) { 
        $a[$i] = (int)readline();
    }

    for ($i=0; $i < 10; $i++) { 
        $b[$i] = (int)readline();
    }

    for ($i=0; $i < 10; $i++) { 
        $c[$i] = $a[$i]; 
    }

    for ($i=0; $i < 10; $i++) { 
        $c[$i+10] = $b[$i]; 
    }

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

   ArrayPrint($c);




?>