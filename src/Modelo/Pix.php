<?php

namespace WallSoft\Loto5\modelo;

class Pix extends Db{
    /* Classe PIX a qual contém dados e informações 
    para pagamento de apostas ao usuário. */

    private int $id;
    private string $numPix;
    private string $nome;
    private string $banco;

    public function __construct(string $numPix, string $banco, string $nome)
    {
        parent::__construct();
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
    public function gravarPix():int{
        $query="
        INSERT INTO pix(
            numPix,
            nome,
            banco
        )VALUES(
            '{$this->numPix}',
            '{$this->nome}',
            '{$this->banco}'
        );";
        $this->mysqli->query($query);
        return  $this->mysqli->insert_id;

    }

}