<?php 
    $num = (int)readline();
    $n = 1;
    $result = 0;
    while (true) {
        if ($result > $num) {
            break;
        }
        $result = pow(2,$n);
        $n++;
    }

    echo $result/2;




?>