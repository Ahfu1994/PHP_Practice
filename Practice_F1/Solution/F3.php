<?php 
    $num = (int)readline();
    $count = 0;
    for ($i=1; $i <= $num; $i++) { 
        if ($num%$i ==0) {
            $count++;
        }
    }

    if ($count == 2) {
        echo "is a prime number";
    }
    else{
        echo "is not a prime number";
    }

  
?>