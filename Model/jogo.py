# coding: utf-8
# Jogo

from Model.numlist import NumList


class Jogo(NumList):
    '''Classe que manipula números do jogo.'''
    def __init__(self,num_list):
        super().__init__(num_list=num_list)

    def pts(self, res):
        '''Metodo que retorna dict. com lista de erros, lista de acertos e número de pontos.'''
        erros = list(set(self.nums) - set(res.num_list))
        acertos=list(set(self.nums) - set(erros))
        pts=len(acertos)
        return {'erros':erros,'acertos':acertos,'pts':pts}

    def dup(self,comp):
        '''Método que retorna boleano para "jogo duplicado?"'''
        dup=list(set(self.jogo)-set(comp))
        if not dup: return True
        else: return False
    
    def comp(self):
        '''Método que compara jogo com resultado'''
        pass


