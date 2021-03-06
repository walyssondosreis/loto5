<?php

use WallSoft\Loto5\modelo\Usuario;

session_start();

// Verifica formulário de login
if (
  isset($_POST['iptNomeUsuario']) &&
  isset($_POST['iptSenha']) &&
  !empty(trim($_POST['iptNomeUsuario']))
) {
  // Cria objeto de Usuario para inicio de sessão
  $usuarioSessao = new Usuario(
    nomeUsr: $_POST['iptNomeUsuario'],
    senha: $_POST['iptSenha']
  );

  // Verifica se usuário esta autorizado a logar no sistema
  if ($usuarioSessao->autorizarLogin()) {
    $_SESSION['nomeUsuarioLogado'] =  $usuarioSessao->obterPerfilUsuario()['nome'];
    $_SESSION['nomeUsrUsuarioLogado'] = $usuarioSessao->obterPerfilUsuario()['nomeUsr'];
    header('Location: src/controle/home.php');
    die();
  }
}
