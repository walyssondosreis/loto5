<?php

namespace WallSoft\Loto5\modelo;
require_once "../loto5/helpers.php";

class Concurso extends Db{

    private int $num;
    private string $dataSorteio;
    private $nomeEspecial;

    public function __construct(int $num,string $dataSorteio='', string $nomeEspecial='')
    {
        parent::__construct();
        $this->num=$num;
        $this->dataSorteio=alterarDataParaDb($dataSorteio);
        $this->nomeEspecial=$nomeEspecial;
    }

    public function definirConcurso(string $dataSorteio='', string $nomeEspecial=''):void{
        if($dataSorteio!='') $this->dataSorteio=alterarDataParaDb($dataSorteio); 
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
    public function gravarConcurso(){
        if($this->dataSorteio =='') $this->dataSorteio= NULL;
        if($this->nomeEspecial=='') $this->nomeEspecial= NULL;
        $query="
        INSERT INTO concurso(
            num,
            dataSorteio,
            nomeEspecial
        )VALUES(
            {$this->num},
            '{$this->dataSorteio}',
            '{$this->nomeEspecial}'

        );";
        // echo $query;
        $this->mysqli->query($query);
    }
}