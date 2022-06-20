<?php


namespace WallSoft\Loto5\Modelo\Numeros;

use WallSoft\Loto5\Modelo\Numeros\ListaDeNumeros;
use WallSoft\Loto5\Modelo\Usuario;

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