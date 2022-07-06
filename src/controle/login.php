<?php

use WallSoft\Loto5\modelo\Usuario;



if(isset($_POST['iptNomeUsuario'])&& 
isset($_POST['iptSenha'])&&
!empty(trim($_POST['iptNomeUsuario']))){
    $usuarioSessao= new Usuario(
        nomeUsr: $_POST['iptNomeUsuario'],
        senha: $_POST['iptSenha']);
        
     if($usuarioSessao->autorizarLogin()) {
        header('Location: src/Visao/telaCadastroAposta.php');
        die();
     }
     // verificar se usuário existe na base
     // verificar se senha confere com a informada
     // Autorizar login e redirecionar para tela principal
     
}
