<?php

use WallSoft\Loto5\modelo\Usuario;

require_once "autoload.php";


// $user01= new Usuario('kemelp','Kemel Pinto','22589566699','12345678');
// $user02= new Usuario('miaa','Mia Arengazza','11475896588');

// $user01->gravarUsuario();
// $user02->gravarUsuario();

// echo password_verify('12345678',$kemelSenhaCasa);
// echo password_verify('1234567s8',$kemelSenhaVox);
// echo password_verify('MIAA',$miaSenha);

// echo var_dump($user01->autorizarLogin());

// echo var_dump($user01);

include "src/controle/login.php";
include "src/visao/telaLogin.php";
// include "src/visao/telaCadastroAposta.php";