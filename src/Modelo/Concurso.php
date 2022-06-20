<?php

namespace WallSoft\Loto5\Modelo;

class Concurso{

    private int $numero;
    private string $dataSorteio;

    public function __construct(int $numero)
    {
        $this->numero=$numero;
    }
}