<?php 
    $n = 5;
    for ($i=0; $i < 5; $i++) { 
        for ($j=0; $j < $i; $j++) { 
            echo "-";
        }
       for ($j=0; $j < $n*2-1; $j++) { 
            echo "x";
       }
       echo "\n";
       $n--;
    }



?>