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
    public function obterIdUsuario():array{
        $id=array(
            $this->nomeUsr,
            $this->nome
        );
        return $id;
    }
    public function obterPerfilUsuario():array{
        $usuario=array(
            $this->dataNasc,
            $this->telefone,
            $this->email,
            $this->endereco

        );
        return $usuario;

    }
    public function obterPixUsuario():array{
        $pix=array(
            $this->numPix,
            $this->bancoPix,
            $this->nomePix
        );
        return $pix;
    }
}