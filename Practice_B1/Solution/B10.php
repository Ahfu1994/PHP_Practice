<?php 
      for ($i=1; $i <= 1000; $i++) { 
        if (($i%3 == 0) && ($i%5 == 0)) {
            echo "$i\n";
        }
        else if (($i%3 == 0) && ($i%7 == 0)){
            echo "$i\n";
        }
        else if (($i%5 == 0) && ($i%7 == 0)){
            echo "$i\n";
        }
    }



?>