<?php
    $sec = readline();

    $y = ($sec/31104000);
    $s = ($sec%60);
    $mi = (($sec/60)%60);
    $h = ((($sec/60)/60)%24);
    $d = ((($sec/60)/60)/24)%30;
    $mo = ((($sec/60)/60)/24)/30%12;
  

    echo $y."\n";
    echo $mo."\n";
    echo $d."\n";
    echo $h."\n";
    echo $mi."\n";
    echo $s;
       




?>