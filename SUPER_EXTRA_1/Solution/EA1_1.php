<?php 
    $m1 = (double)readline();
    $m2 = (double)readline();
    $R = (double)readline();
    $G = 6.67e-11;
    $f = ($G*$m1*$m2)/pow($R,2);

    echo $f;



?>