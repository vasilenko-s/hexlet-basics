<?php
/*
Реализуйте функцию fib находящую числа Фибоначчи. Аргументом функции является порядковый номер числа.

Формула:

f(0) = 0
f(1) = 1
f(n) = f(n-1) + f(n-2)

Пример:

2 == fib(3)
5 == fib(5)
55 == fib(10)
*/

namespace App\Solution;

// BEGIN (write your solution here)
function fib($num)
{
    switch ($num) {
        case '0':
            return 0;
            break;

        case '1':
            return 1;
            break;

        default:
            return fib($num-1)+fib($num-2);
            break;
    }
}

// END
