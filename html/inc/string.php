<?php

//but function asName
//parameternya $nama
//asName("Ahmad Dani"); //namamu adalah ahmad dani


function askName($nama)
{
   $format_nama=ucwords(strtolower($nama));
   echo"namaku adalah $format_nama";
}
  askName("Ahmad DaNI");
  echo 'namaku $nama';
  echo "namaku $nama";

?>
