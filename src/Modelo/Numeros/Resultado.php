<?php

namespace WallSoft\Loto5\Modelo\Numeros;

use WallSoft\Loto5\Modelo\Numeros\ListaDeNumeros;
use  WallSoft\Loto5\Modelo\Concurso;

class Resultado extends ListaDeNumeros{

    private Concurso $concurso;
    public function __construct(Concurso $concurso,Array $listaNumeros)
    {
        ListaDeNumeros::__construct($listaNumeros);
        $this->concurso=$concurso;
        
    }
}