<?php

namespace WallSoft\Loto5\modelo;

class Concurso{

    private int $num;
    private string $dataSorteio;
    private string $nomeEspecial;

    public function __construct(int $num,string $dataSorteio='', string $nomeEspecial='')
    {
        $this->num=$num;
        $this->dataSorteio=$dataSorteio;
        $this->nomeEspecial=$nomeEspecial;
    }

    public function definirConcurso(string $dataSorteio='', string $nomeEspecial=''):void{
        if($dataSorteio!='') $this->dataSorteio=$dataSorteio; 
        if($nomeEspecial!='') $this->nomeEspecial=$nomeEspecial;
    }

    public function obterConcurso():array{
        $concurso=array(
            'num'=>$this->num,
            'dataSorteio'=>$this->dataSorteio,
            'nomeEspecial'=>$this->nomeEspecial
        );
        return $concurso;

    }
}