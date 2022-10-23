<?php 

    $num1 = (int)readline();
    $num2 = (int)readline();
    echo max($num1,$num2);

    function findMax(int $num1, int $num2){
        return $num1>$num2?$num1:$num2;
    }

?>