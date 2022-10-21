<?php 

    for ($i=0; $i < 10; $i++) { 
        if ($i == 0) {
            echo "*|";
        }
        else if ($i>0) {
            echo "\t$i";
        }
        
    }

    echo "\n";

    for ($i=0; $i < 77; $i++) { 
       echo "-";
    }
    
    echo "\n";

    for ($i=1; $i <=9 ; $i++) { 

        echo "$i|";

        for ($j=1; $j <=9 ; $j++) { 
            echo "\t".$i*$j;
        }
        echo "\n";
    }



?>