# coding: utf-8
# Resultado

from Model.numlist import NumList


class Resultado(NumList):
    ''' Classe que manipula números do resultado'''
    def __init__(self,cc,data,num_list):
        super().__init__(num_list=num_list)
        self.cc=cc
        self.data=data

    def rank_seq(self):
        '''Classifica seq dos resultados'''
        pass
    def calc_temp(self):
        '''Calcula temperatura dos resultados'''
        pass