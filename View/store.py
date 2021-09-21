# coding: utf-8
# STORE : Tela p/ registro de usuários,resultados e apostas

class Store:
    def __init__(self):
        print('------------LOTO 5\nby walyssondosreis\n')
        print('(01)-- Registrar Aposta')
        print('(02)-- Registrar Concurso')
        print('(03)-- Registrar Usuário')
        print('(04)-- *Conferir Resultado de Apostas')
        print('(05)-- *Conferir Temperatura de Resultados')
        print('(06)-- *Conferir Aposta em Concursos')
        print('(07)-- *Visualizar Apostas')
        print('(08)-- *Visualizar Concursos')
        print('(09)-- *Visualizar Usuários')
        print('(10)-- Resetar Apostas em Conferência')
        print('(10)-- Voltar')
        print('(11)-- Sair')
        decide=int(input('\nDigite sua opção: '))
        
        if decide==1: print('Cadastrando Aposta')
        elif decide==2: print('Cadastrando Concurso')
        elif decide==3: print('Cadastrando Usuario ')
    
    def visualizar_apostas(self):
        print('------------LOTO 5\nby walyssondosreis')
        print('Visualizar Apostas\n')
        print('(01)-- Visualizar Apostas Pagas Não Conferidas')
        print('(02)-- Visualizar Apostas por Usuário')
        print('(03)-- Visualizar Apostas por Grupo')
        print('(04)-- Visualizar Apostas ')
        print('(05)-- Voltar')
        print('(06)-- Sair')
        decide=int(input('\nDigite sua opção: '))