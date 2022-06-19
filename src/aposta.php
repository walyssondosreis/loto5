<?php

class Aposta {

    private int $id;
    private Concurso $concurso;
    private Jogo $jogo;
    private Usuario $usuario;
    private string $grupo;
    private bool $pago;

    public function __construct(Usuario $usuario, Concurso $concurso, Jogo $jogo)
    {
        $this->usuario=$usuario;
        $this->concurso=$concurso;
        $this->jogo=$jogo;
        
    }
}