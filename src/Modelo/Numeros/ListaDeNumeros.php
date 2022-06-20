<?php

namespace WallSoft\Loto5\Modelo\Numeros;

abstract class ListaDeNumeros{
    protected  Array $listaNumeros;
    /* Regras loteria  : lotofácil */
    private int $numInicial=1;
    private int $numFinal=25;
    private int $totalNumeros = 25;
    private int $maxNumerosMarcar = 18;
    private int $minNumerosMarcar = 15;
    private int $maxNumerosGanhar = 15;
    private int $minNumerosGanhar = 11;

    public function __construct(Array $listaNumeros)
    {
        if($this->validaNumeros($listaNumeros)){
            $this->listaNumeros=$listaNumeros;
        }
        else{
            echo "Números não seguem as regras do jogo";
        }
    }

    private function validaNumeros($listaNumeros):bool{
        if(count($listaNumeros) < $this->minNumerosMarcar) {
            echo "A qtd min de num a serem marcados são {$this->minNumerosMarcar}";
            return false;
        }
        if(count($listaNumeros) > $this->maxNumerosMarcar){
            echo "A qtd max de num a serem marcados é {$this->maxNumerosMarcar}";
            return false;
        } 
        return true;
    }

    public function obterSequencia():void{
    }

    public function obterImpares():void{

    }

    public function obterPares():void{

    }

    public function obterPrimos():void{

    }
}