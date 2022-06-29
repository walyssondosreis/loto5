<?php



$arq = fopen('lotofacil.csv','r');
$res=array();
while(!feof($arq)){
    $linhaArq =  fgets($arq);
    $res[]=explode(',',$linhaArq);
}

array_shift($res); // Remove cabeçalhos


echo array_shift($res[0]); // Remove e retorna Concurso
echo array_shift($res[0]); // Remove e retorna Data Sorteio
echo var_dump($res[0]);