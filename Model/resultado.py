# coding: utf-8
# Resultado

from Model.numlist import NumList


class Resultado(NumList):
    ''' Classe que manipula números do resultado'''
    def __init__(self,cc,data,num_list):
        super().__init__(num_list=num_list)
        self.cc=cc
        self.nums=self.validar(num_list)
        self.data=data

    def validar(self,list):
        '''Valida sequência de números da entrada.'''
        #Ordena lista de números
        list=sorted(list)
        #Verifica quantidade de números permitidos
        if len(list) !=15 : print('ERRO: Não Contém 15 num') ; return None
        #Verifica se só existem números de 1 a 25
        for x in list: 
            if x < 1 or x > 25: 
                print('ERRO: Num não aceito(s) na lista')
                return None
        return list

    def rank_seq(self):
        '''Classifica seq dos resultados'''
        pass
    def calc_temp(self):
        '''Calcula temperatura dos resultados'''
        pass