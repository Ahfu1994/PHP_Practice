<?php 
    $num1 = (double)readline();
    echo Absolute($num1);

    function Absolute(float $num){
        
        return $num>=0?$num:(-1)*$num;
    }


?>