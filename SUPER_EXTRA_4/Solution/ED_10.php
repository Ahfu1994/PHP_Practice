<?php 
    $arr = [[],[],[],[],[]];

    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < 7; $j++) { 
            $arr[$i][$j] = (int)readline();
        }
      }

    //   for ($i=0; $i < count($arr); $i++) { 
    //     for ($j=0; $j < 7; $j++) { 
    //         echo $arr[$i][$j]." ";
    //     }
    //     echo "\n";
    //   }

    // echo count($arr);

    $sum;
    for ($i=0; $i < count($arr); $i++) { 
        $sum = 0;
        for ($j=0; $j < 7; $j++) { 
            $sum = $sum+$arr[$i][$j];
        }

        echo "$sum\n";
      }





?>