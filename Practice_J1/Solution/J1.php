<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
        $arr[$i] = (int)readline();
    }

    sort($arr);
    toString($arr);

    function toString($arr){
        for ($i=0; $i < count($arr); $i++) { 
            if ($i == 0) {
                echo "["."$arr[$i]";
            }
            elseif ($i == count($arr)-1) {
                echo ", $arr[$i]"."]";
            }
            else {
                echo ", $arr[$i]";
            }
        }
    }
   



?>