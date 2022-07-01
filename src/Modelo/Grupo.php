<?php

namespace  WallSoft\Loto5\modelo;

class Grupo extends Db {
    private int $id;
    private string $nome;

    public function __construct($nome)
    {
        parent::__construct();
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
    public function gravarGrupo(){
        $query="INSERT INTO grupo(
            nome
        )VALUES(
            '{$this->nome}'
        );";
        // echo $query;
        $this->mysqli->query($query);
    }
}