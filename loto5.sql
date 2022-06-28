-- BANCO DE DADOS
CREATE DATABASE loto5 CHARACTER SET utf8 COLLATE utf8_general_ci;

-- TABELA: USUARIO
CREATE TABLE usuario(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nomeUsr VARCHAR(10) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    cpf VARCHAR(18) UNIQUE,
    dataNasc DATE,
    telefone VARCHAR(12),
    numPix TEXT,
    nomePix VARCHAR(50),
    bancoPix VARCHAR(20),
    email VARCHAR(50),
    endereco TEXT
);
-- TABELA: JOGO
CREATE TABLE jogo(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nomeJogo VARCHAR(20) UNIQUE,
    idUsuario INTEGER NOT NULL,
    listaNumeros VARCHAR(55) NOT NULL
);

-- TABELA: RESULTADO
CREATE TABLE resultado(
    numConcurso INTEGER  PRIMARY KEY NOT NULL FOREIGN KEY REFERENCES concurso(numero),
    listaNumeros VARCHAR(55) NOT NULL,
);
-- TABELA: CONCURSO
CREATE TABLE concurso(
    numero INTEGER PRIMARY KEY,
    dataSorteio DATE,
    nomeEspecial VARCHAR(20)
);

-- TABELA: APOSTA
CREATE TABLE aposta(
    id INTEGER PRIMARY KEY,
    numConcurso INTEGER NOT NULL FOREIGN KEY REFERENCES concurso(numero),
    idJogo INTEGER NOT NULL FOREIGN KEY REFERENCES jogo(id),
    idUsuario INTEGER NOT NULL FOREIGN KEY REFERENCES usuario(id),
    grupo VARCHAR(50),
    pago BOOLEAN
);
