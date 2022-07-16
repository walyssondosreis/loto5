<?php


namespace WallSoft\Loto5\modelo\numeros;

use WallSoft\Loto5\modelo\Usuario;

class Jogo extends ListaDeNumeros{
    private int $id;
    private string $nomeJogo;
    private Usuario $usuario;

    public function __construct(Usuario $usuario,Array $listaDeNumeros, string $nomeJogo='')
    {

        parent::__construct($listaDeNumeros);
        $this->usuario=$usuario;
        $this->nomeJogo=$nomeJogo;
        
    }

    public function obterJogo():array{
        $jogo=array(
            'listaDeNumeros'=>$this->listaDeNumeros,
            'nomeJogo'=>$this->nomeJogo,
            'usuario'=>$this->usuario
        );
        return $jogo;
    }
    public function obterValorJogo():float{
        if(count($this->listaDeNumeros)==15) return 2.5;
        if(count($this->listaDeNumeros)==16) return 40;
        if(count($this->listaDeNumeros)==17) return 340;
        if(count($this->listaDeNumeros)==18) return 2040;
        return 0;

    }
    public function verificarDuplicado(){
        /* Verifica se jogo já esta registrado e retorna bool*/
    }

    public function verificarPontos(){
        /* Verifica resultado de jogo em .: 
                > Determinado concurso
                > Em uma faixa de concursos
                > Em determinado período de tempo
                > Para jogos em determinadas seq
                > Para determinada pontuação*/
    }

    public function compararJogo(){
        /* Compara jogo/numeros com outro jogo em .:
            > Relação a sequência
            > Relação a temperatura dos números
            > Relação a determinado resultado */ 
    }

    public function deuLoto(){
        /* Confere apenas se jogo já foi premiado com pontuação toatal */
    }
    public function gravarJogo(){
        $query="INSERT INTO jogo(
            nomeJogo,
            usuario,
            listaDeNumeros
        )VALUES(
            '{$this->nomeJogo}',
            '{$this->usuario->obterPerfilUsuario()['nomeUsr']}',
            '". implode('-',$this->listaDeNumeros) ."'
        );";
        // echo $query;
        $this->mysqli->query($query);
    }

}