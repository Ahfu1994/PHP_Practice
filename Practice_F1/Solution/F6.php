<?php 
 
 $num = 0;
    for ($i=1;$i <=1000 ; $i++) { 
        $count = 0;
        for ($j=1; $j <= $i; $j++) { 
            if ($i%$j == 0) {
                $count++;
            }
        }
        if ($count == 2) {
            echo "$i\n"; 
            $num++;
            if ($num == 100) {
                exit;
            } 
        }
    }

   
?>