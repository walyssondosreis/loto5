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
    email VARCHAR(50),
    endereco TEXT,
    pix VARCHAR(10)
    
);
-- TABELA: PIX
CREATE TABLE pix(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    numPix TEXT UNIQUE NOT NULL,
    nome VARCHAR(50) NOT NULL,
    banco VARCHAR(20)
    
);

-- TABELA: JOGO
CREATE TABLE jogo(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nomeJogo VARCHAR(20) UNIQUE,
    usuario INTEGER NOT NULL,
    listaDeNumeros VARCHAR(55) NOT NULL
);
-- TABELA: CONCURSO
CREATE TABLE concurso(
    num INTEGER PRIMARY KEY,
    dataSorteio DATE UNIQUE,
    nomeEspecial VARCHAR(20)
);

-- TABELA: GRUPO
CREATE TABLE grupo(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) UNIQUE
);

-- TABELA: RESULTADO
CREATE TABLE resultado(
    concurso INTEGER  PRIMARY KEY,
    listaDeNumeros VARCHAR(55) NOT NULL,
    FOREIGN KEY (concurso)
            REFERENCES concurso(num)
            ON DELETE CASCADE
);

-- TABELA: APOSTA
CREATE TABLE aposta(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    concurso INTEGER NOT NULL ,
    jogo INTEGER NOT NULL ,
    usuario INTEGER NOT NULL ,
    grupo INTEGER ,
    pago BOOLEAN,
    FOREIGN KEY (concurso) REFERENCES concurso(num),
    FOREIGN KEY (jogo) REFERENCES jogo(id),
    FOREIGN KEY (usuario) REFERENCES usuario(id),
    FOREIGN KEY (grupo) REFERENCES grupo(id)
);
