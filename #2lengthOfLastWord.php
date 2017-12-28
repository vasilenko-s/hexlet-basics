<?php

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
