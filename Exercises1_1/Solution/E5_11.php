<?php 
    $a1 = (float)readline();
    $b1 = (float)readline();
    $c1 = (float)readline();

    $a2 = (float)readline();
    $b2 = (float)readline();
    $c2 = (float)readline();

    $x = ($c1*$b2 - $b1*$c2)/($a1*$b2 - $a2*$b1);
    $y = ($c2 - $a2*$x)/$b2;

    echo $x."\n";
    echo $y;



?>