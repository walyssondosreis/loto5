<?php

require_once "src/listadenumeros.php";

class Resultado extends ListaDeNumeros{

    private Concurso $concurso;
    public function __construct(Concurso $concurso,Array $listaNumeros)
    {
        ListaDeNumeros::__construct($listaNumeros);
        $this->concurso=$concurso;
        
    }
}