# coding: utf-8
# Aposta


#from Model.jogo import Jogo
#from Model.usuario import Usuario
#from Model.concurso import Concurso


class Aposta:
    def __init__(self,cc,username,jogo):
        self.id=''
        self.nome=''
        self.grupo=''
        self.pag=False
        self.cc=cc #Concurso()
        self.usuario=username #Usuario()
        self.jogo=jogo #Jogo()
    
    def get(self):
        pass
    def verificar_pag(self):
        pass
    def conferir_aposta(self):
        pass
    def calc_invest(self):
        pass
    def calc_prem(self):
        pass


