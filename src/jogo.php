<?php

require_once "src/listadenumeros.php";

class Jogo extends ListaDeNumeros{
    private int $id;
    private string $nomeJogo;
    private Usuario $usuario;

    public function __construct(Usuario $usuario,Array $listaNumeros)
    {

        ListaDeNumeros::__construct($listaNumeros);
        $this->usuario=$usuario;
        
    }
}