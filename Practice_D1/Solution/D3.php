<?php 
    $n = (int)readline();
    $sum = 0;
    for ($i=1; $i < $n; $i++) { 
        $sum = 1/$i + $sum;
    }
    echo $sum;



?>