<?php 

    $nums  ;
    $count = 0;
    $sum = 0;
    while (true) {
        $nums = (int)readline();

        if ($nums == 0) {
           break;
        }
        else if ($nums < 0) {
            echo "ERROR\n";
        }
        else {
            $sum  = $sum + $nums;
            $count++;
        }
       
    }

    $avg = $sum/$count;
    echo $avg;


?>