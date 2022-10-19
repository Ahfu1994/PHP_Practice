<?php 
    $arr = array();
    for ($i=0; $i < 10; $i++) { 
       $arr[$i] = (int)readline();
    }

    for ($i=0; $i < count($arr); $i++) { 
      if ($arr[$i]%2 == 0) {
         echo "$arr[$i]\n";
      }
       
    }

?>