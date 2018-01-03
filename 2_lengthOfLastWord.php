<?php
/*
# Exersice 2
Реализуйте функцию lengthOfLastWord, которая возвращает длину последнего слова переданной на вход строки. Словом считается любая последовательность не содержащая пробелов.

Примеры:

0 == lengthOfLastWord('');
5 == lengthOfLastWord('man in BlacK');
6 == lengthOfLastWord('hello, world!  ');
*/

namespace App\Solution;

// BEGIN (write your solution here)
function lengthOfLastWord($str)
{
    if ($str=='') {
        return 0;
    }
    // Разбить строку на слова
    $words=explode(' ', $str);
    //Найти последнее слово, которое непустая строка
    $lastWord=array_pop($words);
    while ($lastWord=='') {
        $lastWord=array_pop($words);
    }
    //Найти длину последнего слова
    $result= mb_strlen($lastWord);
    return $result;    
}
// END


// END
