<?php 

    $num1 = (int)readline();
    $num2 = (int)readline();

    echo sum($num1, $num2);

    function sum(int $num1, int $num2){
        return $num1+$num2;

    }

?>