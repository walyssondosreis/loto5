<?php

namespace WallSoft\Loto5\Modelo\Numeros;

abstract class ListaDeNumeros{
    protected  Array $listaNumeros;

    public function __construct(Array $listaNumeros)
    {
        $this->listaNumeros=$listaNumeros;
    }

}