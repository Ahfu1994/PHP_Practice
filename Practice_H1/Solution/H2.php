<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
       $arr[$i] = (int)readline();
    }

    for ($i=0; $i < count($arr); $i++) { 
       echo "$arr[$i]\n";
    }

?>