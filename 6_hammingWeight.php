<?php
/*

Вес Хэмминга это количество единиц в двоичном представлении числа.
src/App/Solution/Solution.php

Реализуйте функцию hammingWeight, которая считает вес Хамминга.

Пример:

0 == hammingWeight(0)
1 == hammingWeight(4)
4 == hammingWeight(101)



*/

namespace App\Solution;

// BEGIN (write your solution here)
function hammingWeight($num)
{
    // перевод числа в двоичную форму
    $binNum=decbin($num);

    $count=0;
    for ($i=0; $i<=strlen($binNum)-1; $i++) {
        if ($binNum[$i]==1) {
            $count++;
        }
    }
    return $count;
}
var_dump(hammingWeight(101));
// END
