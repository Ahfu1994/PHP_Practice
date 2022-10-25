<?php 

    $w = (int)readline();
    $h = (int)readline();

    $s1 = sqrt(($w*$h)/3600);

    $s2 = (71.84*pow($w,0.425)*pow($h,0.725))/10000;

    $s3 = 0.0003207*pow($h,0.3)*pow(1000*$w, 0.7285-0.0188*(3+log($w,10)));

    echo $s1."\n".$s2."\n".$s3;




?>