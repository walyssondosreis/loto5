# coding: utf-8
# JOGO/NUMEROS

class Jogo:
    '''Classe de jogos/números.'''
    def __init__(self, jogo):
        self.jogo = jogo

    def seq_verificar(self):
        '''Metodo que retorna lista com sequência das divisões em grupo.'''
        p1, p2, p3, p4, p5 = 0, 0, 0, 0, 0
        for x in self.jogo:
            if x < 6: p1 += 1
            if 5 < x < 11: p2 += 1
            if 10 < x < 16: p3 += 1
            if 15 < x < 21: p4 += 1
            if x > 20: p5 += 1
        seq = [p1, p2, p3, p4, p5]
        return seq

    def pontos_verificar(self, res):
        '''Metodo que retorna dict. com lista de erros, lista de acertos e número de pontos.'''
        erros = list(set(self.jogo) - set(res))
        acertos=list(set(self.jogo) - set(erros))
        pontos=len(acertos)
        return {'erros':erros,'acertos':acertos,'pontos':pontos}

    def duplicado_verificar(self,comp):
        '''Método que retorna boleano para "jogo duplicado?"'''
        dup=list(set(self.jogo)-set(comp))
        if not dup: return True
        else: return False


