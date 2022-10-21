<?php 
    $a = 50;
    // $pa = 3;
    $b = 70;
    // $pb = 2;

    $n = 0;
    while (true) {
        if ($a> $b) {
           break;
        }
       $a = $a*1.03;
       $b = $b*1.02;
       $n++;
    }

    echo $n;




?>