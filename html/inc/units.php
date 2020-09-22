<?php


//buat function celciusTofahrenheit
//nilai 1 celcius =33,8 fahrenheit
//parameter function int celcius
//invoke function celciusTofahrenheit(22); /// print a53,6


function celciusTofahrenheit($celcius)
{
 
$convertion=($celcius*9/5)+32;

echo "$celcius celcius= $convertion fahrenheit";

}

celciusTofahrenheit(80);


?>