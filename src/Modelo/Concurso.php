<?php

namespace WallSoft\Loto5\Modelo;

class Concurso{

    private int $numero;
    private string $dataSorteio;
    private string $nomeEspecial;

    public function __construct(int $numero,string $dataSorteio='', string $nomeEspecial='')
    {
        $this->numero=$numero;
        $this->dataSorteio=$dataSorteio;
        $this->nomeEspecial=$nomeEspecial;
    }

    public function definirPerfilConcurso(string $dataSorteio, string $nomeEspecial):void{
        $this->dataSorteio=$dataSorteio; 
        $this->nomeEspecial=$nomeEspecial;
    }

    public function obterConcurso():array{
        $concurso=array(
            $this->numero,
            $this->dataSorteio,
            $this->nomeEspecial
        );
        return $concurso;

    }
}