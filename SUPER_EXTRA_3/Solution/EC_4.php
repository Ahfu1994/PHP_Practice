<?php 
       $arr = array();
       for ($i=0; $i < 10; $i++) { 
            $arr[$i] = (int)readline();
       } 
       
       $V = (int)readline();
       $position = -1;
       for ($i=0; $i < count($arr); $i++) { 
            if ($V == $arr[$i]) {
                $position = $i;
                break;
            }
       }
       if ($position != -1) {
        for ($j=$position; $j < count($arr)-1; $j++) { 
            $arr[$j] = $arr[$j+1];
         }
         $arr[count($arr)-1] = 0;
       }

       function ArrayPrint($arr){
          echo "[";
          for ($i=0; $i < count($arr); $i++) { 
              echo "$arr[$i]";
              if ($i < count($arr)-1) {
                  echo ", ";
              }
          }
          echo "]";
       }

    ArrayPrint($arr);
      
?>