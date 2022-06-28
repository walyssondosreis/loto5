<?php

namespace  WallSoft\Loto5\modelo;

class Grupo {
    private int $id;
    private string $nome;

    public function __construct($nome)
    {
        $this->nome=$nome;
        
    }
    public function definirGrupo(string $nome){
        $this->nome=$nome;
    }
    public function obterGrupo():array{
        $grupo=array(
            $this->nome
        );
        return $grupo;
    }
}