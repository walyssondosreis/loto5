-- BANCO DE DADOS
CREATE DATABASE loto5 CHARACTER SET utf8 COLLATE utf8_general_ci;

-- TABELA: USUARIO
CREATE TABLE usuario(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nomeUsr VARCHAR(20) NOT NULL UNIQUE,
    nome VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(18) UNIQUE,
    dataNasc DATE,
    telefone VARCHAR(12),
    email VARCHAR(50),
    endereco TEXT
    
);
-- TABELA: PIX
CREATE TABLE pix(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    numPix TEXT UNIQUE NOT NULL,
    nome VARCHAR(50) NOT NULL,
    banco VARCHAR(20),
    usuario VARCHAR(20) NOT NULL,
    FOREIGN KEY (usuario)
            REFERENCES usuario(nomeUsr)
            ON DELETE CASCADE
);
-- TABELA: CONCURSO
CREATE TABLE concurso(
    num INTEGER PRIMARY KEY,
    dataSorteio DATE UNIQUE,
    nomeEspecial VARCHAR(20)
);

-- TABELA: RESULTADO
CREATE TABLE resultado(
    concurso INTEGER  PRIMARY KEY,
    listaDeNumeros VARCHAR(55) NOT NULL,
    FOREIGN KEY (concurso)
            REFERENCES concurso(num)
            ON DELETE CASCADE
);
-- TABELA: GRUPO
CREATE TABLE grupo(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) UNIQUE NOT NULL
);

-- TABELA: JOGO
CREATE TABLE jogo(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nomeJogo VARCHAR(20) UNIQUE,
    usuario VARCHAR(20) NOT NULL,
    listaDeNumeros VARCHAR(55) NOT NULL,
    FOREIGN KEY (usuario) 
            REFERENCES usuario(nomeUsr)
            ON DELETE CASCADE
);

-- TABELA: APOSTA
CREATE TABLE aposta(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    concurso INTEGER NOT NULL ,
    jogo INTEGER NOT NULL ,
    usuario INTEGER NOT NULL ,
    grupo INTEGER NOT NULL,
    pago BOOLEAN,
    FOREIGN KEY (concurso) REFERENCES concurso(num) ON DELETE CASCADE, 
    FOREIGN KEY (jogo) REFERENCES jogo(id) ON DELETE CASCADE,
    FOREIGN KEY (usuario) REFERENCES usuario(id) ON DELETE CASCADE,
    FOREIGN KEY (grupo) REFERENCES grupo(id) ON DELETE CASCADE
);

---------------------
-- CRIA COLUNA NA TABELA USUARIO
ALTER TABLE usuario ADD senha VARCHAR(255) AFTER nome;