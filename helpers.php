<?php

function alterarDataParaDb(string $data){
    $dataBruta=array_reverse(explode('/',$data));
    return implode('-',$dataBruta);

}