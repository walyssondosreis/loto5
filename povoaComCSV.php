<?php

set_time_limit(0); // Remove limite de tempo de resposta

/* Preenche DB Resultados Reais*/

use WallSoft\Loto5\modelo\Concurso;
use WallSoft\Loto5\modelo\numeros\Resultado;

$arq = fopen('lotofacil-res.csv','r');
$res=array();
while(!feof($arq)){
    $linhaArq =  fgets($arq);
    $res[]=explode(',',$linhaArq);
}

array_shift($res); // Remove cabeçalhos

foreach($res as $r){

    $numCC=array_shift($r);
    $dataCC=array_shift($r);
    $cc= new Concurso($numCC,$dataCC);
    $cc->gravarConcurso();

    $resultado=new Resultado($cc,$r);
    $resultado->gravarResultado();
    
    
    // echo var_dump($resultado->obterResultado());
    
}