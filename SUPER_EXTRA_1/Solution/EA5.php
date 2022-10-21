<?php 
    $a = (double)readline();
    $b = (double)readline();
    $c = (double)readline();

    $max = 0;
    if ($a > $b && $a > $c) {
        $max = $a;
        if ($b+$c <= $max) {
            echo "is not triangle";
        }
    }
    else if ($b > $a && $b > $c) {
        $max = $b;
    }
    else{
        $max = $c;
    }

    echo $R;



?>