# coding: utf-8
# GO : Tela p/ conferência de resultado de apostas

from View.tela import *


class Go(Tela):
    def __init__(self):
        os.system('clear')
        print('------------LOTO 5\nby walyssondosreis')
        print('Conferir Resultado de Apostas\n')
        print('(01)-- Conferir Resultado de Apostas por Grupo')
        print('(02)-- Conferir Resultado de Apostas por Usuário')
        print('(03)-- Conferir Resultado de Apostas por Sequência')
        print('(04)-- Conferir Resultado de Todas Apostas Pagas')
        print('(05)-- Conferir Resultado de Todas Apostas Não Pagas')
        print('(06)-- Conferir Resultado de Todas Apostas')
        print('(07)-- Voltar')
        print('(08)-- Sair')
        decide=int(input('\nDigite sua opção: '))
