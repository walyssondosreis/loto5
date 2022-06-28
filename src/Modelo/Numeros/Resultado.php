<?php

namespace WallSoft\Loto5\modelo\numeros;

use WallSoft\Loto5\modelo\numeros\ListaDeNumeros;
use  WallSoft\Loto5\modelo\Concurso;

class Resultado extends ListaDeNumeros{

    private Concurso $concurso;
    public function __construct(Concurso $concurso,Array $listaNumeros)
    {
        ListaDeNumeros::__construct($listaNumeros);
        $this->concurso=$concurso;
        
    }
}