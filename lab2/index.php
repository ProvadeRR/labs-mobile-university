<?php

function middleValue(array $array)
{
    $sum = array_reduce($array, function($state, $current){
        $state+= $current;
        return $state;
    }, 0);
    return $sum / count($array);
}

$array = [3,4,5,6,7,1,2,3];
echo middleValue($array);
