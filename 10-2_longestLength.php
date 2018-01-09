<?php
/*
Реализуйте функцию longestLength принимающую на вход строку
и возвращающую длину максимальной последовательности из неповторяющихся
символов. Подстрока может состоять из одного символа.
Например в строке qweqrty, можно выделить следующие подстроки:
qwe, weqrty. Самой длинной будет weqrty.

Пример:

longestLength('abcdeef'); // 5
longestLength('jabjcdel'); // 7



*/

namespace App\Solution;

// BEGIN (write your solution here)
// определяем была ли строка уникальна, количество индексов, представляющих
// собой буквы равно длине строки
$isUniqueString = function ($string) {
        return count(array_flip(str_split($string))) == strlen($string);
};
//вычисляем максимальную длину уникальной подстроки
    $findBiggestUniqueSubstringLength = function ($string) use ($isUniqueString) {
        $length = strlen($string);
        for ($i = $length - 1; $i >= 0; $i --) {
            for ($j = 0; $j < $length - $i; $j ++) {
                // берем подстроку строки.
                // от нулевого символа, сокращающейся длины.
                $sub = substr($string, $j, $i + 1);
                if ($isUniqueString($sub)) {
                    return $i + 1;
                }
            }
        }
        return 0;
    };
    return $findBiggestUniqueSubstringLength($str);
// END
