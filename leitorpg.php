<?php

$conteudo = file_get_contents(
    "lotofacilres.html"
    
);
$dom = new DOMDocument();
@$dom->loadHTML($conteudo);

$finder=new DOMXPath($dom);
$nomeClasse='tabela-resultado lotofacil';
$nodes= $finder->query("//*[contains(@class, '$nomeClasse')]");

echo var_dump($nodes);