<?php

namespace WallSoft\Loto5\modelo;

use WallSoft\Loto5\modelo\numeros\Jogo;

class Aposta {

    private int $id;
    private Concurso $concurso;
    private Jogo $jogo;
    private Usuario $usuario;
    private Grupo $grupo;
    private bool $pago;

    public function __construct(Usuario $usuario, Concurso $concurso, Jogo $jogo, string $grupo=new Grupo('Lotofacil'))
    {
        $this->usuario=$usuario;
        $this->concurso=$concurso;
        $this->jogo=$jogo;
        $this->grupo=$grupo;
        $this->pago=false;
    }
    public function definirPagoAposta(bool $pago):void{
        $this->pago=$pago;
    }
    
    public function definirGrupoAposta(Grupo $grupo){
        $this->grupo=$grupo;
    }

    public function obterAposta():array{
        $aposta=[];

        return $aposta;
    }

    public function obterPagoAposta():bool{
        return $this->pago;
    }
    
    public function conferirAposta(){
        /* Confere resultado da aposta*/
    }
    
    public function verificarInvestimento(){
        /* Retorna valor investido na aposta */
    }

    public function verificarPremio(){
        /* Retorna valor de prêmio da aposta */
    }

    
}