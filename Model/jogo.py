# coding: utf-8
# Jogo

from Model.numlist import NumList


class Jogo(NumList):
    '''Classe que manipula números do jogo.'''
    def __init__(self,nome_jogo,num_list):
        super().__init__(num_list=num_list)
        self.nome_jogo=nome_jogo #Equivale a ID para Obj.Jogo() Único
        self.nums=self.validar(num_list) #Valida seq de entrada para aposta

    def validar(self,list):
        '''Valida sequência de números da entrada.'''
        #Ordena lista de números
        list=sorted(list)
        #Verifica quantidade de números permitidos
        if len(list) <15 : print('ERRO: Menos de 15 num') ; return None
        elif len(list) >18 : print('ERRO: Mais de 18 num'); return None
        #Verifica se só existem números de 1 a 25
        for x in list: 
            if x < 1 or x > 25: 
                print('ERRO: Num não aceito(s) na lista')
                return None
        return list

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


