<?php

use WallSoft\Loto5\modelo\Usuario;


// Verifica formulário de login
if(isset($_POST['iptNomeUsuario'])&& 
isset($_POST['iptSenha'])&&
!empty(trim($_POST['iptNomeUsuario']))){
   // Cria objeto de Usuario para inicio de sessão
    $usuarioSessao= new Usuario(
        nomeUsr: $_POST['iptNomeUsuario'],
        senha: $_POST['iptSenha']);

      // Verifica se usuário esta autorizado a logar no sistema
     if($usuarioSessao->autorizarLogin()) {
         $_SESSION['usuarioLogado'] =  'Kemel Pinto';
          echo var_dump($_SESSION['usuarioLogado']);
        header('Location: src/Visao/telaCadastroAposta.php');
        die();
     }
     
}
