<?php

use WallSoft\Loto5\modelo\Usuario;

session_start();

$usuarioLogado= new Usuario(
    nomeUsr: $_SESSION['nomeUsrUsuarioLogado'],
    nome: $_SESSION['nomeUsuarioLogado']
);

echo var_dump($usuarioLogado);
exit();

// require_once "../Visao/telaCadastroAposta.php";

