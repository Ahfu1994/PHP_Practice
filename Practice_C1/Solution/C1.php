<?php 
    for ($i=0; $i < 10; $i++) { 
        echo "x";
    }

    //recursive
    $num = 10;
    function printX($num){
        $i = 0;
        if ($num<=$i) {
            exit;
        }
        echo "x";
        $i++;
        return printX($num-1);
    }

    printX(10);


?>