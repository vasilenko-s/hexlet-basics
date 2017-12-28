<?php
/*
# Exersice 1
Реализуйте функцию binarySum, которая складывает переданные бинарные числа (как строки):

<?php

'11' == binarySum('10', '1');
'10010' == binarySum('1101', '101');
*/

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

