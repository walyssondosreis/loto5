<?php

namespace WallSoft\Loto5\modelo;
require_once "../loto5/helpers.php";

class Usuario extends Db {
    /* Classe de usuário do sistema, 
    os quais farão apostas, análises e checagem.*/
    private int $id;
    private string $nomeUsr;    // Obrigatório
    private string $nome;       // Obrigatório
    private string $cpf;        // Obrigatório
    private string $dataNasc;   // Opcional
    private string $telefone;   // Opcional
    private string $email;      // Opcional
    private string $endereco;   // Opcional
    private array $pixis;       // Opcional

    public function __construct(
        string $nomeUsr,
        string $nome,
        string $cpf)
        
    {
        parent::__construct();
        $this->nomeUsr = $nomeUsr;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->pixis=[];
    }
    public function __toString()
    {
        return $this->nomeUsr;
    }

    public function definirPerfilUsuario(
        string $dataNasc='',
        string $telefone='',
        string $email='',
        string $endereco=''

    ):void{
        $this->dataNasc=alterarDataParaDb($dataNasc);
        $this->telefone=$telefone;
        $this->email=$email;
        $this->endereco=$endereco;

    }

    public function definirPixUsuario(string $numPix, string $banco, string $nome):void{
        /* Método para inclusão de Chave PIX para usuário.
        Um usuário poderá ter várias chaves PIX, 
        mas uma chave PIX só poderá estar associada a um usuário.  */
        $pix=new Pix(
            numPix: $numPix,
            banco: $banco,
            nome: $nome
        );
        array_push($this->pixis, $pix);
    }

    public function obterPerfilUsuario():array{
        /* Método que retorna Array com propriedades do perfil do usuário. */
        $usuario=array(
            'nomeUsr'=>$this->nomeUsr,
            'nome'=>$this->nome,
            'cpf'=>$this->cpf,
            'dataNasc'=>$this->dataNasc,
            'telefone'=>$this->telefone,
            'email'=>$this->email,
            'endereco'=>$this->endereco

        );
        return $usuario;

    }
    public function obterPixUsuario():array{
        /* Método que retorna Array com todos os PIXs cadastrados para o usuário. */
        $pixList=array();

        foreach($this->pixis as $pix){
            $pixList[]=$pix->obterPix();
        }

        return $pixList;
    }
    
    public function gravarUsuario():void{

        $campos=array('nomeUsr','nome','cpf');
        $pixisId=array();
       // Verifica se existem atributos opcionais
        if(isset($this->dataNasc)&& !empty($this->dataNasc)) $campos[]='dataNasc';
        if(isset($this->telefone)&& !empty($this->telefone)) $campos[]='telefone';
        if(isset($this->email)&& !empty($this->email)) $campos[]='email';
        if(isset($this->endereco)&& !empty($this->endereco)) $campos[]='endereco';
        $valores= array();
        foreach($campos as $campo){
            $valores[]="'".$this->$campo ."'";
        }
        if(isset($this->pixis) && !empty($this->pixis)){
            foreach($this->pixis as $pix) $pixisId[]=$pix->gravarPix();
            $campos[]='pix';
            $valores[]="'".implode('-',$pixisId)."'";
        }
       // Grava  Usuario
        $query="
            INSERT INTO usuario("
                .implode(',',$campos)
            .")VALUES("
                .implode(',',$valores)
            .");"
        ;
        //  echo $query;
        $this->mysqli->query($query);
        
    }

}