<?php 
     $arr = array();
     for ($i=0; $i < 10; $i++) { 
         $arr[$i] = (int)readline();
     } 

     for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr)-1; $j++) { 
           if ($arr[$j] < $arr[$j+1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
           }
        }
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

    ArrayPrint($arr);


?>