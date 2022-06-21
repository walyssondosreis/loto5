<?php

namespace WallSoft\Loto5\Modelo;

use WallSoft\Loto5\Modelo\Concurso;
use WallSoft\Loto5\Modelo\Numeros\Jogo;
use WallSoft\Loto5\Modelo\Usuario;

class Aposta {

    private int $id;
    private Concurso $concurso;
    private Jogo $jogo;
    private Usuario $usuario;
    private string $grupo;
    private bool $pago;

    public function __construct(Usuario $usuario, Concurso $concurso, Jogo $jogo, string $grupo='')
    {
        $this->usuario=$usuario;
        $this->concurso=$concurso;
        $this->jogo=$jogo;
        $this->grupo=$grupo;
        
    }
    public function definirPagoAposta(bool $pago):void{
        $this->pago=$pago;
    }
    
    public function definirGrupoAposta(string $grupo):void{
        $this->grupo=$grupo;
    }
    
    public function obterDadosAposta():array{
        $aposta=[];

        return $aposta;
    }
}