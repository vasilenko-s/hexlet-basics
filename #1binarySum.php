<?php

namespace App\Solution;

// BEGIN (write your solution here)
function binarySum($digOne, $digTwo)
{
    // преобразование в десятичные числа
    $decSum=bindec($digOne)+bindec($digTwo);
    $result=decbin($decSum);
    return $result;
    
}
// END

