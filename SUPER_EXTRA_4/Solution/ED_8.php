<?php 
    $n = (int)readline();
    $count = 0;
    for ($i=1; $i <= $n; $i++) { 
        if ($n%$i == 0) {
            $count++;
        }
       
    }

    if ($count == 2) {
        echo "1";
    }
    else{
        echo "0";
    }



?>