<?php

function getSumOfElements($num1, $num2)
{
    $array = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
    $count = count($array);
    $sum = 0;
    //check index of both the integers passed
    $key1 = array_search($num1, $array);
    $key2 = array_search($num2, $array);

    if ((!is_int($num1)) || (!is_int($num2))) {
        return -1;
    } elseif (($num1 > $num2) || (empty($key1) && empty($key2))) {
        return 0;
    } elseif (empty($key2)) {
        for ($i = $key1; $i < $count; $i++) {
            $sum += $array[$i];
        }
    } else {
        for ($i = $key1; $i <= $key2; $i++) {
            $sum += $array[$i];
        }
    }
    return $sum;
}

$sum = getSumOfElements(70, 100);
echo $sum;
