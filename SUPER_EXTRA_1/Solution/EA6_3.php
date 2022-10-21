<?php 
    for ($i=0; $i < 9; $i++) { 
        for ($j=0; $j < 9; $j++) { 
            if ($j == $i || $j == 9-$i-1) {
                echo "x";
            }
            else {
                echo "-";
            }
        }
        echo "\n";
    }




?>