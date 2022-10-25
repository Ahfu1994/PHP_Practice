<?php 
    function circleArea(int $r){
        return pi()*pow($r,2);
    }

    $r = (int)readline();
    echo circleArea($r);




?>