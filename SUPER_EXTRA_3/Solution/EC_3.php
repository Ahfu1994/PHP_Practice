<?php 
       $arr = array();
       for ($i=0; $i < 10; $i++) { 
            $arr[$i] = (int)readline();
       } 
       
       $max = PHP_INT_MIN;
       $position = 0;
       for ($i=0; $i < count($arr); $i++) { 
            if ($max < $arr[$i]) {
                $max = $arr[$i];
                $position = $i;
            }
       }

       echo "$max\n";
       echo "$position";


?>