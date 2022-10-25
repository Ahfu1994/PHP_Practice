<?php 
    function circleRadius($area){
        return sqrt($area/pi());
    }

    $area = (float)readline();
    echo circleRadius($area);

    

?>