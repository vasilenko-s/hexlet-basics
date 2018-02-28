<?php

/*

Реализуйте функцию compareVersion, которая сравнивает переданные версии
version1 и version2. Если version1 > version2, то функция должна вернуть
1, если наоборот то -1, в противном случае 0.

Версия это строка в которой два числа (мажорная и минорные версии)
 разделены точкой, например: 12.11. Важно понимать, что версия, это не
 число с плавающей точкой, это несколько чисел не связанных между собой.
Проверка на больше/меньше производится сравнением каждого числа независимо.
 Поэтому версия 0.12 больше версии 0.2.

Пример порядка версий:

0.1 < 1.1 < 1.2 < 1.11 < 13.37


*/

namespace App\Solution;

// BEGIN (write your solution here)



function compareVersion($version1, $version2)
{
    //разбить строку на два числа
    $arrVers1=explode(".", $version1);
    $arrVers2=explode(".", $version2);
    $result=0;
    //сравнить непосредственно пару чисел
    if ($arrVers1[0]>$arrVers2[0]) {
        $result= 1;
    } elseif ($arrVers1[0]<$arrVers2[0]) {
        $result= -1;
    } elseif (($arrVers1[0]==$arrVers2[0])&&($arrVers1[1]>$arrVers2[1])) {
        $result= 1;
    } elseif (($arrVers1[0]==$arrVers2[0])&&($arrVers1[1]<$arrVers2[1])) {
            $result= -1;
    } elseif (($arrVers1[0]==$arrVers2[0])&&($arrVers1[1]==$arrVers2[1])) {
        $result= 0;
    }

    return $result;
}
var_dump(compareVersion(1.2, 1.11));

// END
