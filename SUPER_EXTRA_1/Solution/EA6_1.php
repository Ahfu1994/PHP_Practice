<?php 

    for ($i=1; $i <= 5; $i++) { 
        for ($j=0; $j < 5-$i; $j++) { 
            echo "-";
        }
        for ($j=0; $j < $i*2-1; $j++) { 
            echo "x";
        }
        echo "\n";
    }


?>