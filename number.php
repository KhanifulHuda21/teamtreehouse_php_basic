<?php

$number=1; //integer

$float=1.2; //float /desimal

$sint_float=(int)$float; //integer

$str_float=(string)$float; //string

$str_boolean=(bool)$float; //boolean

var_dump($str_boolean);

function kali(int $satu,int $dua):int

{

    return $satu*$dua;
}

/**
 * operator
 * subtrack(-)
 * addtion(+)
 * multiplay(*)
 * divide(/)
 * increment(++)
 * dicrement(--)
 * 
 */

 echo 4/2; //2
 echo 4%2; //0 sisa bagi,hasil sisa dari pembagian


 $angka=1; //1
 $angka++; //2
 $angka--; //1
 $angka+=9; //10
 $angka/=5; //2
 $angka.=7; //2dan 7 atau 27

 echo PHP_EOL;
 echo $angka;




?>