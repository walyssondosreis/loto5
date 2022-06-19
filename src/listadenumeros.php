<?php

abstract class ListaDeNumeros{
    protected  Array $listaNumeros;

    public function __construct(Array $listaNumeros)
    {
        $this->listaNumeros=$listaNumeros;
    }

}