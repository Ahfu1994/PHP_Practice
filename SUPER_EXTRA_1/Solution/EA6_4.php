<?php 
    $n = 15;
    $mid = (int)($n/2);
    // echo $mid;
    for ($i=0; $i <= $mid; $i++) { 
        for ($j=0; $j < $n; $j++) { 
           if ($j == $mid-$i || $j == $mid+$i) {
                echo "x";
           }
           else {
                echo "-";
           }
        }
        echo "\n";
    }
    for ($i=1; $i <= $mid; $i++) { 
        for ($j=0; $j < $n; $j++) { 
           if ($j == $i || $j == $n-$i-1) {
                echo "x";
           }
           else {
                echo "-";
           }
        }
        echo "\n";
    }
?>