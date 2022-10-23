<?php 

    $num1 = (int)readline();
    $num2 = (int)readline();
    $num3 = (int)readline();
    echo findMax($num1,$num2,$num3);

    function findMax(int $num1, int $num2, int $num3){
        $max = $num1>$num2?$num1:$num2;
        $max2 = $max>$num3?$max:$num3;
        return $max2;
    }



?>