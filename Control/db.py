# coding: utf-8

# Projeto: LOTO5
# Módulo: db
# Descrição: Módulo de criação e manipulação Slqlite3 db
# Autor: Walysson dos Reis
# Email: walyssondosreis@gmail.com

import sqlite3
from os import path

class DB:
    '''Classe que manipula arquivos diretamente no db'''
    def __init__(self):
        self.db='' # Obj. que receberá db
        self.cur='' # Obj.Cursor do db
        if path.isfile('loto5.db'): 
            print('Banco de dados localizado')
        else:
            print('Banco de dados não localizado')
            self.conectar()
            self.criar_tabelas()

    # ===================================================================================================================
    # Métodos de CONEXÃO no banco de dados
    # ===================================================================================================================

    def conectar(self):
        ''' Metodo que abre conexão com o db '''
        try:
            for x in range(2):
                print('TENTATIVA',x,'DE CONEXÃO COM SQLLITE')
                try:
                    self.db = sqlite3.connect('loto5.db')
                    self.cur = self.db.cursor()
                    print('Banco Conectado')
                    break
                except: pass
        except:
            error='ERRO CONECTAR NO BANCO!'
            print(error)

    def desconectar(self):
        ''' Metodo que fecha conexão com o db '''
        self.db.close()
        print('Banco Desconectado')
    def recriar_tabelas(self):
        '''Método que cria tabelas no db'''
        self.conectar()
        self.cur.execute("""CREATE TABLE usuario (
        id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        nome_pix TEXT,
        cpf     VARCHAR(11) NOT NULL,
        chave_pix VARCHAR(11),
        fone TEXT,
        cidade TEXT,
        uf VARCHAR(2) NOT NULL,
        criado_em DATE NOT NULL);""")
        print('Tabelas Criadas')
        self.desconectar()

    # ===================================================================================================================
    # Métodos de GRAVAÇÃO no banco de dados
    # ===================================================================================================================
    def gravar_usuario(self):
        pass
    def gravar_jogo(self):
        pass
    def gravar_resultado(self):
        pass
    def gravar_aposta(self):
        pass

    # ===================================================================================================================
    # Métodos de ATUALIZAÇÃO no banco de dados
    # ===================================================================================================================
    def atualizar_usuario(self):
        pass
    def atualizar_jogo(self):
        pass
    def atualizar_resultado(self):
        pass
    def atualizar_aposta(self):
        pass

    # ===================================================================================================================
    # Métodos de EXCLUSÃO no banco de dados
    # ===================================================================================================================
    def deletar_usuario(self):
        pass
    def deletar_jogo(self):
        pass
    def deletar_concurso(self):
        pass
    def deletar_aposta(self):
        pass

    # ===================================================================================================================
    # Métodos de BUSCA no banco de dados
    # ===================================================================================================================
    def buscar_usuario(self):
        pass
    def buscar_jogo(self):
        pass
    def buscar_concurso(self):
        pass
    def buscar_aposta(self):
        pass
    