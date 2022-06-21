<?php

namespace WallSoft\Loto5\Modelo;

class Usuario{

    private int $id;
    private string $nomeUsr;
    private string $nome;
    private string $dataNasc;
    private string $telefone;
    private string $numPix;
    private string $nomePix;
    private string $bancoPix;
    private string $email;
    private string $endereco;

    public function __construct(
        string $nomeUsr,
        string $nome)
    {
        $this->nomeUsr = $nomeUsr;
        $this->nome = $nome;
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

    public function definirPixUsuario(
        string $numPix,
        string $bancoPix,
        string $nomePix
    ):void{
        $this->numPix=$numPix;
        $this->bancoPix=$bancoPix;
        $this->nomePix=$nomePix;

    }

    public function obterPerfilUsuario():array{
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
        $pix=array(
            'numPix'=>$this->numPix,
            'bancoPix'=>$this->bancoPix,
            'nomePix'=>$this->nomePix
        );
        return $pix;
    }
}