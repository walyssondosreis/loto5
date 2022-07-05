<?php


if(isset($_POST['iptNomeUsuario'])&& 
isset($_POST['iptSenha'])&&
!empty(trim($_POST['iptNomeUsuario']))){
    $usuarioLogado= $_POST['iptNomeUsuario'];
    $usuarioLogadoSenha= $_POST['iptSenha'];
     echo $usuarioLogado;
     echo $usuarioLogadoSenha;die();

     
}
