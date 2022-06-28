<?php

namespace WallSoft\Loto5\modelo;

use WallSoft\Loto5\modelo\Pix;

class Usuario{
    /* Classe de usuário do sistema, 
    os quais farão apostas, análises e checagem.*/
    private int $id;
    private string $nomeUsr;
    private string $nome;
    private string $dataNasc;
    private string $telefone;
    private string $email;
    private string $endereco;
    private array $pixis;

    public function __construct(
        string $nomeUsr,
        string $nome)
        
    {
        $this->nomeUsr = $nomeUsr;
        $this->nome = $nome;
        $this->pixis=[];
    }
    public function __toString()
    {
        return $this->nomeUsr;
    }

    public function definirPerfilUsuario(
        string $dataNasc,
        string $telefone,
        string $email,
        string $endereco

    ):void{
        $this->dataNasc=$dataNasc;
        $this->telefone=$telefone;
        $this->email=$email;
        $this->endereco=$endereco;

    }

    public function definirPixUsuario(string $numPix, string $banco, string $nome):void{
        /* Método para inclusão de Chave PIX para usuário.
        Um usuário poderá ter várias chaves PIX, 
        mas uma chave PIX só poderá estar associada a um usuário.  */
        $pix=new Pix(
            numPix: $numPix,
            banco: $banco,
            nome: $nome
        );
        array_push($this->pixis, $pix);
    }

    public function obterPerfilUsuario():array{
        /* Método que retorna Array com propriedades do perfil do usuário. */
        $usuario=array(
            'nomeUsr'=>$this->nomeUsr,
            'nome'=>$this->nome,
            'dataNasc'=>$this->dataNasc,
            'telefone'=>$this->telefone,
            'email'=>$this->email,
            'endereco'=>$this->endereco

        );
        return $usuario;

    }
    public function obterPixUsuario():array{
        /* Método que retorna Array com todos os PIXs cadastrados para o usuário. */
        $pixList=array();

        foreach($this->pixis as $pix){
            $pixList[]=$pix->obterPix();
        }

        return $pixList;
    }


}