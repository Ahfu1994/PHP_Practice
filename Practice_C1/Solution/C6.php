<?php 

$count = 0;
for ($i=10; $i > 0; $i--) { 
    
   for ($j=$i-1; $j >0 ; $j--) { 
    echo "-";
   }
   $count++;
   for ($j=0; $j < $count*2-1; $j++) { 
   echo "x";
   }
   echo "\n";
}



?>