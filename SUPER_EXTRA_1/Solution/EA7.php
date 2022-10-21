<?php 
    $wA = (double)readline();
    $pA = (double)readline();
    $wB = (double)readline();
    $pB = (double)readline();

    $A = $pA/$wA;
    $B = $pB/$wB;

    // echo $A."\n";
    // echo $B."\n";

    if ($A < $B) {
        echo "A is cheaper than B";
    }
    else if ($B < $A) {
        echo "B is cheaper than A";
    }
    else {
        echo "Equal price";
    }






?>