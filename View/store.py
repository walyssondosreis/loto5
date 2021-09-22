# coding: utf-8
# STORE : Tela p/ registro de usuários,resultados e apostas

from View.pro import Pro
from View.max import Max
from View.tela import *
from View.go import Go


class Store(Tela):
    def __init__(self):
        os.system('clear')
        print('------------LOTO 5\nby walyssondosreis\n')
        print('(01)-- Registrar Aposta')
        print('(02)-- Registrar Concurso')
        print('(03)-- Registrar Usuário')
        print('(04)-- *Conferir Resultado de Apostas')
        print('(05)-- *Conferir Temperatura de Resultados')
        print('(06)-- *Conferir Aposta em Concursos')
        print('(07)-- *Visualizar Apostas')
        print('(08)-- *Visualizar Resultados')
        print('(09)-- *Visualizar Usuários')
        print('(10)-- Resetar Apostas em Conferência')
        print('(11)-- Voltar')
        print('(12)-- Sair')
        decide=int(input('\nDigite sua opção: '))
        
        if decide==4: Go()
        elif decide==5: Max()
        elif decide==6: Pro()
        elif decide==7: self.visualizar_apostas()
        elif decide==8: self.visualizar_resultados()
        elif decide==9: print('Cadastrando Usuario ')
    
    def visualizar_apostas(self):
        os.system('clear')
        print('------------LOTO 5\nby walyssondosreis')
        print('Visualizar Apostas\n')
        print('(01)-- Visualizar Apostas Pagas Não Conferidas')
        print('(02)-- Visualizar Apostas por Usuário')
        print('(03)-- Visualizar Apostas por Grupo')
        print('(04)-- Visualizar Apostas ')
        print('(05)-- Voltar')
        print('(06)-- Sair')
        decide=int(input('\nDigite sua opção: '))
    def visualizar_resultados(self):
        os.system('clear')
        print('------------LOTO 5\nby walyssondosreis')
        print('Visualizar Resultados\n')
        print('(05)-- Voltar')
        print('(06)-- Sair')
        decide=int(input('\nDigite sua opção: '))
    def visualizar_usuarios(self):
        os.system('clear')
        print('------------LOTO 5\nby walyssondosreis')
        print('Visualizar Usuários\n')
        print('(05)-- Voltar')
        print('(06)-- Sair')
        decide=int(input('\nDigite sua opção: '))
    