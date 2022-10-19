<?php 
    $n = (int)readline();
    $mul = 1;
    for ($i=1; $i < $n; $i++) { 
        $mul = $mul*$i + $mul;
    }
    echo $mul;



?>