<?php

namespace WallSoft\Loto5\modelo;

class Pix {
    /* Classe PIX a qual contém dados e informações 
    para pagamento de apostas ao usuário. */

    private int $id;
    private string $numPix;
    private string $nome;
    private string $banco;

    public function __construct(string $numPix, string $banco, string $nome)
    {
        $this->numPix = $numPix;
        $this->nome = $nome;
        $this->banco = $banco;
        
    }

    public function obterPix():array{
        $pix=array(
            $this->numPix,
            $this->nome,
            $this->banco
        );
        return $pix;
    }

}