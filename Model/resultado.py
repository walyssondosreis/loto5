# coding: utf-8
# Resultado

from Model.os15 import Os15
from Model.concurso import Concurso


class Resultado(Os15):
    ''' Classe que manipula números do resultado'''
    def __init__(self):
        super().__init__()
        self.cc=Concurso()

    def rank_seq(self):
        '''Classifica seq dos resultados'''
        pass
    def calc_temp(self):
        '''Calcula temperatura dos resultados'''
        pass