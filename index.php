<?php

require_once "autoload.php";

use WallSoft\Loto5\modelo\Usuario;
use WallSoft\Loto5\modelo\numeros\Jogo;
use WallSoft\Loto5\modelo\Concurso;
use WallSoft\Loto5\modelo\Aposta;
use WallSoft\Loto5\modelo\Grupo;
use WallSoft\Loto5\modelo\numeros\Resultado;
use WallSoft\Loto5\modelo\Pix;

//$aposta01 = new Aposta($user01,$cc01,$jogo01);

/* Cria usuário */
// $user01= new Usuario('walyssondosreis','Walysson dos Reis','11659465822');
// $user01->definirPerfilUsuario('13/07/1994','38984337424','walyssondosreis@gmail.com','Rua 16 n31 Jardim Olimpico - Montes Claros - MG');
// $pix02= new Pix($user01,'38984337424','Nubank','Walysson dos Reis');
// $pix01= new Pix($user01,'11516923600','Mercado Pago', 'Walysson dos Reis');

// $user01->gravarUsuario();
// $pix01->gravarPix();
// $pix02->gravarPix();
// echo var_dump($user01->obterPerfilUsuario()); 



// $user02= new Usuario('vilmap','Vilma Pereira de Souza','55994826522');
// $user02->definirPerfilUsuario(email:'vilmapereiradesouza2@gmail.com');
// $pix03=new Pix($user02,'vilmapereiradesouza2@gmail.com','Nubank','Vilma Pereira de Souza');
// $user02->gravarUsuario();
// $pix03->gravarPix();
// echo var_dump($user02->obterPixUsuario());
// echo $user01;


// $user01->gravarUsuario();

/* Cria concurso */
// $cc01 = new Concurso(2500);
// $cc01->definirConcurso(dataSorteio:'28/06/2022');
// $cc01->gravarConcurso();
// echo var_dump($cc01->obterConcurso());

/* Grupo de Aposta */
// $gp01 = new Grupo('Lotofacil');
// $gp01->gravarGrupo();

/* Cria jogo */
// $jogo01= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],'Jogo Pobrão');
// $jogo01->gravarJogo();
// $jogo02= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],'Jogo Burguês');
// $jogo02->gravarJogo();
// $jogo03= new Jogo($user01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18],'Jogo Rico');
// $jogo03->gravarJogo();
// $jogo05= new Jogo($user02,[1,2,4,6,7,9,10,11,13,14,17,20,22,24,25],'Independência');
// $jogo05->gravarJogo();
//  echo var_dump($jogo05->obterSequencia());
//  $userDoJogo=$jogo05->obterJogo()['listaNumeros'];
// echo var_dump($userDoJogo[2]);

// echo var_dump($jogo05->obterPares());
// echo var_dump($jogo05->obterImpares());
// echo var_dump($jogo03->obterPrimos());

/* Cria Resultado */
// $res01 = new Resultado($cc01,[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]);
// $res01->gravarResultado();

// include "povoaComCSV.php";

include "src/visao/cadastroAposta.php";