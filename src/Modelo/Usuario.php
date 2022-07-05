<?php

namespace WallSoft\Loto5\modelo;
require_once "../loto5/helpers.php";

class Usuario extends Db {
    /* Classe de usuário do sistema, 
    os quais farão apostas, análises e checagem.*/
    private int $id;
    private string $nomeUsr; 
    private string $nome; 
    private string $cpf; 
    private string $senha;
    private $dataNasc='';   
    private $telefone=''; 
    private $email=''; 
    private $endereco=''; 
    
    public function __construct(
        string $nomeUsr,
        string $nome,
        string $cpf,
        string $senha='')
        
    {
        parent::__construct();
        $this->nomeUsr = $nomeUsr;
        $this->nome = $nome;
        $this->cpf = $cpf;
        if($senha=='') $this->senha=$nomeUsr;
        else $this->senha = $senha;
    }

    public function __toString()
    {
        return $this->nomeUsr;
    }

    public function definirPerfilUsuario(
        string $dataNasc='',
        string $telefone='',
        string $email='',
        string $endereco=''

    ):void{
        $this->dataNasc=alterarDataParaDb($dataNasc);
        $this->telefone=$telefone;
        $this->email=$email;
        $this->endereco=$endereco;
    }


    public function obterPerfilUsuario():array{
        /* Método que retorna Array com propriedades do perfil do usuário. */
        $usuario=array(
            'nomeUsr'=>$this->nomeUsr,
            'nome'=>$this->nome,
            'cpf'=>$this->cpf,
            'dataNasc'=>$this->dataNasc,
            'telefone'=>$this->telefone,
            'email'=>$this->email,
            'endereco'=>$this->endereco
        );
        return $usuario;
    }

    public function gravarUsuario():void{
       // Criptografa senha 
        $senha=password_hash($this->senha,PASSWORD_DEFAULT);
       // Grava  Usuario
        $query="INSERT INTO usuario(
            nomeUsr,
            nome,
            cpf,
            senha,
            dataNasc,
            telefone,
            email,
            endereco
        )VALUES(
            '{$this->nomeUsr}',
            '{$this->nome}',
            '{$this->cpf}',
            '{$senha}',
            '{$this->dataNasc}',
            '{$this->telefone}',
            '{$this->email}',
            '{$this->endereco}'
        );";
        // echo $query;
        $this->mysqli->query($query);
        
    }

    public function autorizarLogin():bool{
        $query ="SELECT nomeUsr";

    }

}