<?php 

$count = 0;
for ($i=10; $i > 0; $i--) { 
    
   for ($j=$i-1; $j >0 ; $j--) { 
    echo "-";
   }
   $count++;
   for ($j=1; $j <= $count; $j++) { 
   echo $j;
   }

   if ($count >1) {
    for ($j=$count-1; $j > 0; $j--) { 
        echo $j;
        }
   }
   echo "\n";
}


?>