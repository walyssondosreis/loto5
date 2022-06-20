<?php

require_once "autoload.php";

use WallSoft\Loto5\Modelo\Usuario;
use WallSoft\Loto5\Modelo\Numeros\Jogo;
use WallSoft\Loto5\Modelo\Concurso;
use WallSoft\Loto5\Modelo\Aposta;

$user01= new Usuario('walyssondosreis','Walysson dos Reis');

$jogo01= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]);

$cc01 = new Concurso(2500);

$aposta01 = new Aposta($user01,$cc01,$jogo01);


$user01->definirPerfilUsuario('13/07/1994','38984337424','walyssondosreis@gmail.com','Rua 16 n31 Jardim Olimpico - Montes Claros - MG');
$user01->definirPixUsuario('38984337424','Nubank','Walysson dos Reis');
echo var_dump($user01);
echo $user01;

