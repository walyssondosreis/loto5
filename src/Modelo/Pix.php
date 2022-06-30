<?php

namespace WallSoft\Loto5\modelo;

class Pix extends Db{
    /* Classe PIX a qual contém dados e informações 
    para pagamento de apostas ao usuário. */

    private int $id;
    private string $numPix;
    private string $nome;
    private string $banco;
    private Usuario $usuario;

    public function __construct(Usuario $usuario, string $numPix, string $banco, string $nome)
    {
        parent::__construct();
        $this->usuario = $usuario;
        $this->numPix = $numPix;
        $this->nome = $nome;
        $this->banco = $banco;
        
    }

    public function obterPix():array{
        $pix=array(
            $this->usuario,
            $this->numPix,
            $this->nome,
            $this->banco
        );
        return $pix;
    }
    public function gravarPix():void{
        $query="
        INSERT INTO pix(
            numPix,
            nome,
            banco,
            usuario
        )VALUES(
            '{$this->numPix}',
            '{$this->nome}',
            '{$this->banco}',
            '{$this->usuario->obterPerfilUsuario()['nomeUsr']}'
        );";
        // echo $query;
        $this->mysqli->query($query);

    }

}