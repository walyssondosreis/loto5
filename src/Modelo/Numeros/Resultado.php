<?php

namespace WallSoft\Loto5\modelo\numeros;

use  WallSoft\Loto5\modelo\Concurso;
use WallSoft\Loto5\modelo\Db;

class Resultado extends ListaDeNumeros{

    private Concurso $concurso;
    
    public function __construct(Concurso $concurso,Array $listaDeNumeros)
    {
        parent::__construct($listaDeNumeros);
        $this->concurso=$concurso;
        
    }
    
    public function rankSequencia(){
        /* Raqueia as sequências.: 
            > De forma geral
            > Com períodos de tempo definidos*/
    }

    public function rankInicidencia(){
        /* Calcula incidência de um número .:
            > Dentro de uma sequência
            > De forma geral
            > Com períodos de tempo definidos */
    }
    
    public function obterResultado():array{
        $resultado=array(
            'concurso'=>$this->concurso,
            'listaDeNumeros'=>$this->listaDeNumeros
        );

        return $resultado;
    }

    public function gravarResultado(){ 
        $query="
        INSERT INTO resultado(
            concurso,
            listaDeNumeros
        )VALUES(
            {$this->concurso->obterConcurso()['num']},
            '". implode('-',$this->listaDeNumeros) ."'

        );";
        // echo $query;
        $this->mysqli->query($query);

    }

}