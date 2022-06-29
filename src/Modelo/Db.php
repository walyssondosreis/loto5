<?php

define('SERVIDOR','127.0.0.1');
define('USUARIO','root');
define('SENHA','root');
define('BANCO','loto5');


class Db {
    protected mysqli $mysqli;

    public function __construct()
    {
        $this->mysqli=new mysqli(SERVIDOR,USUARIO,SENHA,BANCO);
        if (mysqli_connect_errno()) {
            echo "Problemas para conectar no banco. Verifique os dados!";
            die();
        }else echo "Conexão Bem Sucedida!";
    }

}