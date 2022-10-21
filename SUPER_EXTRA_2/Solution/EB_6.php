<?php 
    $count = 0;
    for ($i=1; $i <= 110 ; $i++) { 
        if ($i%3==0 && $i%5==0) {
            echo "CozaLoza";
        }
        else if ($i%3==0 && $i%7==0) {
            echo "CozaWoza";
        }
        else if ($i%5==0 && $i%7==0) {
            echo "LozaWoza";
        }
        else if ($i%3==0 && $i%5==0 && $i%7==0) {
            echo "CozaLozaWoza";
        }
        else if ($i%3 == 0) {
            echo "Coza";
        }
        else if ($i%5 == 0) {
            echo "Loza";
        }
        else if ($i%7 == 0) {
            echo "Woza";
        }
        else {
            echo $i;
        }
        $count++;
        if ($count%11 == 0) {
            echo "\n";
        }
    }




?>