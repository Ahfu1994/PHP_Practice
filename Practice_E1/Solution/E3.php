<?php 
    $num1 = (int)readline();
    $num2 = (int)readline();
    $min = $num1<$num2?$num1:$num2;
    $lcm = 0;
    for ($i=$min; $i > 0; $i--) { 
        if ($num1%$i==0 && $num2%$i==0) {
            $lcm = $i;
            break;
        }
    }
     
    $gcd = $num1*$num2/$lcm;

    echo $gcd;
    



?>