<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
       $arr[$i] = (int)readline();
    }

    for ($i=count($arr)-1; $i >= 0; $i--) { 
       echo "$arr[$i]\n";
    }

?>