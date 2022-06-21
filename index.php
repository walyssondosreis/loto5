<?php

require_once "autoload.php";

use WallSoft\Loto5\Modelo\Usuario;
use WallSoft\Loto5\Modelo\Numeros\Jogo;
use WallSoft\Loto5\Modelo\Concurso;
use WallSoft\Loto5\Modelo\Aposta;

//$aposta01 = new Aposta($user01,$cc01,$jogo01);

/* Cria usuário */
$user01= new Usuario('walyssondosreis','Walysson dos Reis');
$user01->definirPerfilUsuario('13/07/1994','38984337424','walyssondosreis@gmail.com','Rua 16 n31 Jardim Olimpico - Montes Claros - MG');
$user01->definirPixUsuario('38984337424','Nubank','Walysson dos Reis');

$user02= new Usuario('vilmap','Vilma Pereira de Souza');
// //echo var_dump($user01);
// //echo $user01;

/* Cria concurso */
// $cc01 = new Concurso(2500);
// echo var_dump($cc01->obterConcurso());

/* Cria jogo */
$jogo01= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],'Jogo Pobrão');
$jogo02= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],'Jogo Burguês');
$jogo03= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18],'Jogo Rico');
$jogo05= new Jogo($user02,[1,2,4,6,7,9,10,11,13,14,17,20,22,24,25],'Independência');
// echo var_dump($jogo05->obterSequencia());
 $userDoJogo=$jogo05->obterJogo()['listaNumeros'];
echo var_dump($userDoJogo[2]);

// echo var_dump($jogo05->obterPares());
// echo var_dump($jogo05->obterImpares());
// echo var_dump($jogo03->obterPrimos());


