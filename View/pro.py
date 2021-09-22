# coding: utf-8
# GO : Tela p/ conferência de apostas em concursos

from View.tela import *


class Pro(Tela):
    def __init__(self):
        os.system('clear')
        print('------------LOTO 5\nby walyssondosreis')
        print('Conferir Apostas em Resultados\n')
        print('(01)-- Conferir Apostas em Resultados')
        print('(02)-- Conferir Apostas em Resultados por Sequência')
        print('(03)-- Conferir Apostas em Resultados por Seleção de Números')
        print('(04)-- Conferir Apostas em Resultados por Ano')
        print('(05)-- Conferir Apostas em Resultados por Mês')
        print('(06)-- Conferir Apostas em Resultados por Ano e Mês')
        print('(07)-- Conferir Apostas em Resultados por Sequência, Ano e Mês')
        print('(08)-- Voltar')
        print('(09)-- Sair')
        decide=int(input('\nDigite sua opção: '))