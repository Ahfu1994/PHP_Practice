<?php 
    $inches = (int)readline();

    function foot($inches){
        return $inches/12;
    }

    function cem($inches){
        return $inches*2.54;
    }

    function yard($inches){
        return $inches/36;
    }

    echo foot($inches)."\n";
    echo cem($inches)."\n";
    echo yard($inches);


?>