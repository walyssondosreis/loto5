<?php

namespace WallSoft\Loto5\modelo;

use WallSoft\Loto5\modelo\Concurso;
use WallSoft\Loto5\modelo\numeros\Jogo;
use WallSoft\Loto5\modelo\Usuario;
use WallSoft\Loto5\modelo\Grupo;

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
        
    }
    public function definirPagoAposta(bool $pago):void{
        $this->pago=$pago;
    }
    
    public function obterDadosAposta():array{
        $aposta=[];

        return $aposta;
    }
}