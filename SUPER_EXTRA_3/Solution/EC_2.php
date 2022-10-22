<?php 
       $arr = array();
       for ($i=0; $i < 10; $i++) { 
            $arr[$i] = (int)readline();
       } 
       
       $V = (int)readline();
       for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] == $V) {
                echo "V is in array";
                exit;
            }
       }
       echo "is not in array";



?>