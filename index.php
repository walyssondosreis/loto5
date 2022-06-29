<?php

require_once "autoload.php";

use WallSoft\Loto5\modelo\Usuario;
use WallSoft\Loto5\modelo\numeros\Jogo;
use WallSoft\Loto5\modelo\Concurso;
use WallSoft\Loto5\modelo\Aposta;
use WallSoft\Loto5\modelo\Pix;

//$aposta01 = new Aposta($user01,$cc01,$jogo01);

/* Cria usuário */
$user01= new Usuario('walyssondosreis','Walysson dos Reis','11659465822');
$user01->definirPerfilUsuario('13/07/1994','38984337424','walyssondosreis@gmail.com','Rua 16 n31 Jardim Olimpico - Montes Claros - MG');
$user01->definirPixUsuario('38984337424','Nubank','Walysson dos Reis');
$user01->definirPixUsuario('11516923600','Mercado Pago', 'Walysson dos Reis');

// echo var_dump($user01->obterPerfilUsuario()); 



$user02= new Usuario('vilmap','Vilma Pereira de Souza','55994826522');
$user02->definirPixUsuario('vilmapereiradesouza2@gmail.com','Nubank','Vilma Pereira de Souza');
$user02->definirPerfilUsuario(email:'vilmapereiradesouza2@gmail.com');
// echo var_dump($user02->obterPixUsuario());
// echo $user01;


// $user01->gravarUsuario();

/* Cria concurso */
$cc01 = new Concurso(2500);
$cc01->definirConcurso(dataSorteio:'28/06/2022');
$cc01->gravarConcurso();
// echo var_dump($cc01->obterConcurso());

/* Cria jogo */
// $jogo01= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],'Jogo Pobrão');
// $jogo02= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],'Jogo Burguês');
// $jogo03= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18],'Jogo Rico');
// $jogo05= new Jogo($user02,[1,2,4,6,7,9,10,11,13,14,17,20,22,24,25],'Independência');
//  echo var_dump($jogo05->obterSequencia());
//  $userDoJogo=$jogo05->obterJogo()['listaNumeros'];
// echo var_dump($userDoJogo[2]);

// echo var_dump($jogo05->obterPares());
// echo var_dump($jogo05->obterImpares());
// echo var_dump($jogo03->obterPrimos());


