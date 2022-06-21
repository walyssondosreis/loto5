<?php

namespace WallSoft\Loto5\Modelo\Numeros;

use ArrayAccess;

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
        if($this->validarNumeros($listaNumeros)){
            $this->listaNumeros=$listaNumeros;
        }
        else{
            echo "Erro: Números não seguem as regras do jogo";
        }
    }

    private function validarNumeros($listaNumeros):bool{
        if(count($listaNumeros) < $this->minNumerosMarcar) {
            echo "Erro: Quantidade mínima de números a serem marcados são {$this->minNumerosMarcar}";
            return false;
        }
        if(count($listaNumeros) > $this->maxNumerosMarcar){
            echo "Erro: Quantidade máxima de números a serem marcados é {$this->maxNumerosMarcar}";
            return false;
        } 
        return true;
    }

    public function obterSequencia():array{
        $sequencia=[
            'numSeq' =>[], // Número da sequência : Qtd de elementos em cada grupo.
            'g1' =>[], // Grupo 1 : De 1 a 5
            'g2' =>[], // Grupo 2 : De 6 a 10
            'g3' =>[], // Grupo 3 : De 11 a 15
            'g4' =>[], // Grupo 4 : De 16 a 20
            'g5' =>[]  // Grupo 5 : De 21 a 25
        ];

        foreach($this->listaNumeros as $num){
            if($num<6) $sequencia['g1'][]=$num;
            elseif($num<11) $sequencia['g2'][]=$num;
            elseif($num<16) $sequencia['g3'][]=$num;
            elseif($num<21) $sequencia['g4'][]=$num;
            else $sequencia['g5'][]=$num;
        }
        $sequencia['numSeq']=""
            .count($sequencia['g1'])
            .count($sequencia['g2'])
            .count($sequencia['g3'])
            .count($sequencia['g4'])
            .count($sequencia['g5'])
        ;

        return $sequencia;

    }

    public function obterImpares():array{
        $impares=[];
        foreach($this->listaNumeros as $num){
            if($num%2!=0) $impares[]=$num;
        }
        return $impares;

    }

    public function obterPares():array{
        $pares=[];
        foreach($this->listaNumeros as $num){
            if($num%2==0) $pares[]=$num;
        }
        return $pares;

    }

    public function obterPrimos():array{
        $primos=[];
        $listaPrimos=[2,3,5,7,11,13,17,19,23];
        foreach($this->listaNumeros as $num){
            if(in_array($num,$listaPrimos)) $primos[]=$num;
        }
        return $primos;
    }
}