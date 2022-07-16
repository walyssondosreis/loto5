<?php
session_start();

require_once __DIR__."/../../autoload.php";

use WallSoft\Loto5\modelo\Usuario;

$usuarioLogado= new  Usuario(
    nomeUsr: $_SESSION['nomeUsrUsuarioLogado'],
    nome: $_SESSION['nomeUsuarioLogado']
);

$primeiroNomeUsuario=explode(' ',$usuarioLogado->obterPerfilUsuario()['nome'])[0];

$carrinhoDeJogos = array(
    // [
    //     'numeros'=>"1-2-3-4-5-6-7-8-9-10-11-12-13-14-15",
    //     'nome'=>"nomeJogo",
    //     'valor'=>2.5
    // ]
);

$jogoMarcado;


if(isset($_POST['numeros'])){
    // var_dump($_POST['numeros']);
    // exit();
    $jogoMarcado=[
        'numeros'=>implode('-',$_POST['numeros'])
        ,'nome'=>'aleatorio'
        ,'valor'=>2.5
    ];
    $carrinhoDeJogos[]=$jogoMarcado;

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



