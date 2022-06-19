<?php
require_once "src/jogo.php";
require_once "src/aposta.php";
require_once "src/concurso.php";
require_once "src/resultado.php";
require_once "src/usuario.php";
require_once "src/listadenumeros.php";


$user01= new Usuario('Walysson dos Reis');

$jogo01= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]);

$cc01 = new Concurso(2500);

$aposta01 = new Aposta($user01,$cc01,$jogo01);

//echo var_dump($aposta01);

