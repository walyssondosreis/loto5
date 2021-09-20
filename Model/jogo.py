# coding: utf-8
# Jogo

from Model.os15 import Os15


class Jogo(Os15):
    '''Classe que manipula números do jogo.'''
    def __init__(self,num_list):
        super().__init__(num_list=num_list)
        self.pts=0
        self.erros=[]
        self.acertos=[]

    def calc_pts(self, res):
        '''Metodo que retorna dict. com lista de erros, lista de acertos e número de pontos.'''
        erros = list(set(self.jogo) - set(res))
        acertos=list(set(self.jogo) - set(erros))
        pontos=len(acertos)
        return {'erros':erros,'acertos':acertos,'pontos':pontos}

    def verificar_dup(self,comp):
        '''Método que retorna boleano para "jogo duplicado?"'''
        dup=list(set(self.jogo)-set(comp))
        if not dup: return True
        else: return False
    
    def comp_jogos(self):
        '''Método que compara jogo com resultado'''
        pass


