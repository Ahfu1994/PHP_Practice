<?php 
    $w = (int)readline();
    $h = (int)readline();

    function area($w, $h){
        return $w*$h;
    }

    function perimeter($w, $h){
        return 2*($w+$h);
    }

    echo area($w, $h)."\n";
    echo perimeter($w, $h);




?>