<?php

namespace WallSoft\Loto5\modelo;
use mysqli;

define('SERVIDOR',"127.0.0.1");
define('USUARIO',"root");
define('SENHA',"root");
define('BANCO',"loto5");


class Db {

    protected mysqli $mysqli;

    public function __construct()
    {
        $this->mysqli=new mysqli(SERVIDOR,USUARIO,SENHA,BANCO);
    }

}