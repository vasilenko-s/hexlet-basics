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
function longestLength($str)
{
    // Создадим массив из подстрок состоящих из неповторяющихся символов
    $arrSubStr=[];
    for ($i=0; $i<=strlen($str)-1; $i++) {
        $subStr=$str[$i];
        for ($j=$i+1; $j <=strlen($str)-1; $j++) {
            // проверка, что символ не повторяющийся, не входит в строку
            if ((strpos($subStr, $str[$j])===false)&&($j!==strlen($str)-1)) {
                # создаем посдстроку дописываем по символу.
                $subStr.=$str[$j];
                } elseif ($j==strlen($str)-1) {
                  $subStr.=$str[$j];
                  $arrSubStr[]=$subStr;
                  break;
            } else {
                  $arrSubStr[]=$subStr;
                  break;
            }
        }
    }

    return maxLength($arrSubStr);
}

// Функция для нахождения максимальной длины в массиве строк
function maxLength($arrStr)
{
    $result=1;
    foreach ($arrStr as $key => $value) {
        if (strlen($value)>$result) {
            $result=strlen($value);
        }
    }
    return $result;
}

// END
