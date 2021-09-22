# coding: utf-8
# GO : Tela p/ conferência de temperatura 

from View.tela import *


class Max(Tela):
    def __init__(self):
        os.system('clear')
        print('------------LOTO 5\nby walyssondosreis')
        print('Conferir Temperatura de Resultados\n')
        print('(01)-- Conferir Temperatura de Resultados')
        print('(02)-- Conferir Temperatura de Resultados por Ano')
        print('(03)-- Conferir Temperatura de Resultados por Mês')
        print('(04)-- Conferir Temperatura de Resultados por Ano e Mês')
        print('(05)-- Conferir Temperatura de Resultados por Sequência')
        print('(06)-- Conferir Temperatura de Resultados por Sequência e Ano')
        print('(07)-- Conferir Temperatura de Resultados por Sequência, Ano e Mês')
        print('(08)-- Conferir Temperatura de Resultados por Sequência e Mês')
        print('(09)-- Conferir Temperatura de Resultados por Seleção de Números')
        print('(10)-- Conferir Temperatura de Resultados por Seleção de Números e Ano')
        print('(11)-- Conferir Temperatura de Resultados por Seleção de Números e Mễs')
        print('(12)-- Conferir Temperatura de Resultados por Seleção de Números, Ano e Mês')
        print('(13)-- Conferir Temperatura de Resultados por dia')
        print('(14)-- Voltar')
        print('(15)-- Sair')
        decide=int(input('\nDigite sua opção: '))

