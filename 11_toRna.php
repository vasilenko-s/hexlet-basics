<?php
/*
ДНК и РНК это последовательности нуклеотидов.

Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G) и тимин (T).

Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G) и урацил (U).

Цепь РНК составляется на основе цепи ДНК последовательной заменой каждого
нуклеотида:

    G -> C
    C -> G
    T -> A
    A -> U

src/App/Solution/Solution.php

Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает
соответствующую цепь РНК (совершает транскрипцию РНК).

'UGCACCAGAAUU' == toRna('ACGTGGTCTTAA');

*/

namespace App\Solution;

// BEGIN (write your solution here)
/**
 * @param $str
 * @return string
 */

function toRna($str)
{
    $length=strlen($str);
    $result="";
    for ($i=0; $i<=$length-1; $i++) {
        switch ($str[$i]) {
        case 'G':
            $result[$i]='C';
            break;
        case 'C':
            $result[$i]='G';
            break;
        case 'T':
            $result[$i]='A';
            break;
        case 'A':
            $result[$i]='U';
            break;
        default:
            break;
        }
    }
      $result=implode('', $result);
      return $result;
}
// END
