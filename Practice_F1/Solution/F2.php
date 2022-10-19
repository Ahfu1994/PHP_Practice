<?php 
    $num = (int)readline();
    $count = 0;
    for ($i=1; $i <= $num; $i++) { 
        if ($num%$i == 0) {
            // echo "$i\n";
            $count++;
        }
    }

    echo $count;
?>