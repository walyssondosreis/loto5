<?php
session_start();

require_once __DIR__."/../../autoload.php";

use WallSoft\Loto5\modelo\Usuario;

$usuarioLogado= new  Usuario(
    nomeUsr: $_SESSION['nomeUsrUsuarioLogado'],
    nome: $_SESSION['nomeUsuarioLogado']
);

$primeiroNomeUsuario=explode(' ',$usuarioLogado->obterPerfilUsuario()['nome'])[0];

require_once "../Visao/telaCadastroAposta.php";

