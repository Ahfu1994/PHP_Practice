<?php 

    $a = (int)0;
    $b = (int)1;
    $c = (int)2;
    $x = (float)0;
    $y = (float)1;
    $z = (float)2;

    $x = $a-- + ++$b + $c++ + ++$y/$z++;

    echo $a."\n";
    echo $b."\n";
    echo $c."\n";
    echo $x."\n";
    echo $y."\n";
    echo $z;



?>