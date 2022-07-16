<?php
session_start();

require_once __DIR__."/../../autoload.php";

use WallSoft\Loto5\modelo\numeros\Jogo;
use WallSoft\Loto5\modelo\Usuario;

$usuarioLogado= new  Usuario(
    nomeUsr: $_SESSION['nomeUsrUsuarioLogado'],
    nome: $_SESSION['nomeUsuarioLogado']
);

$primeiroNomeUsuario=explode(' ',$usuarioLogado->obterPerfilUsuario()['nome'])[0];

$carrinhoDeJogos = array();

// Verifica se existe um carrinho de jogos na sessão
if(isset($_SESSION['carrinhoDeJogos'])){
    foreach($_SESSION['carrinhoDeJogos'] as $jogo){
        $carrinhoDeJogos[]=$jogo;
    }
}

if(isset($_POST['numeros'])){
    // var_dump($_POST['numeros']);
    // exit();
    $jogo=new Jogo($usuarioLogado,$_POST['numeros']);
    $jogoMarcado=[
        'numeros'=>implode('-',$jogo->obterJogo()['listaDeNumeros']),
        ,'nome'=>$jogo->obterJogo()['nomeJogo'],
        ,'valor'=>$jogo->obterValorJogo()
    ];
    $carrinhoDeJogos[]=$jogoMarcado;
    $_SESSION['carrinhoDeJogos'][]=$jogoMarcado;
    // echo var_dump($_SESSION['carrinhoDeJogos']);exit();

}
if(isset($_POST['numerosLinha'])&& strlen($_POST['numerosLinha']>0)){
    $jogoMarcado=[
        'numeros'=>$_POST['numerosLinha']
        ,'nome'=>'aleatorio'
        ,'valor'=>2.5
    ];
    $carrinhoDeJogos[]=$jogoMarcado;
}

require_once "../Visao/telaCadastroAposta.php";



