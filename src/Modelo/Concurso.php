<?php

namespace WallSoft\Loto5\modelo;

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

    public function definirPerfilConcurso(string $dataSorteio='', string $nomeEspecial=''):void{
        if($dataSorteio!='') $this->dataSorteio=$dataSorteio; 
        if($nomeEspecial!='') $this->nomeEspecial=$nomeEspecial;
    }

    public function obterConcurso():array{
        $concurso=array(
            'numero'=>$this->numero,
            'dataSorteio'=>$this->dataSorteio,
            'nomeEspecial'=>$this->nomeEspecial
        );
        return $concurso;

    }
}