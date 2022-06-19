<?php

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

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    

}