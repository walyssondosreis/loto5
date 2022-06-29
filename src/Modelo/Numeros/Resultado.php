<?php

namespace WallSoft\Loto5\modelo\numeros;

use WallSoft\Loto5\modelo\numeros\ListaDeNumeros;
use  WallSoft\Loto5\modelo\Concurso;

class Resultado extends ListaDeNumeros{

    private Concurso $concurso;
    
    public function __construct(Concurso $concurso,Array $listaDeNumeros)
    {
        ListaDeNumeros::__construct($listaDeNumeros);
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

}