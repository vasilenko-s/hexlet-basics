<?php
/* Реализуйте функцию isPowerOfThree которая определяет,
является ли переданное число натуральной степенью тройки.
Например число 27 это третья степень (3^3), а 81 это четвертая (3^4).

Пример:

isPowerOfThree(1); // true (3^0)
isPowerOfThree(3); // true
isPowerOfThree(4); // false
isPowerOfThree(9); // true

*/

namespace App\Solution;

// BEGIN (write your solution here)
function fib($num)
{
    $fibSum = 0;
    $fib1 = 0;
    $fib2 = 1;

    for ($i = 0; $i < $num; $i++) {
        $fib1 = $fib2;
        $fib2 = $fibSum;
        $fibSum = $fib2 + $fib1;
    }

    return $fibSum;
}

// END
