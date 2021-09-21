# coding: utf-8
# Aposta


#from Model.jogo import Jogo
#from Model.usuario import Usuario
#from Model.concurso import Concurso


class Aposta:
    def __init__(self):
        pass

    def set(self,id,user,cc,jogo,grupo,pag=False):
        self.id=id
        self.usuario=user  #Recebe Obj. Usuario()
        self.cc=cc  #Recebe Obj. Concurso()
        self.jogo=jogo  #Recebe Obj. Jogo()
        self.grupo=grupo
        self.pag=pag

    def get(self):
        cc=[self.id,self.grupo,
            self.pag,self.cc.num,self.usuario.username,self.jogo.nums]
        return cc
    def verificar_pag(self):
        pass
    def conferir_aposta(self):
        pass
    def calc_invest(self):
        pass
    def calc_prem(self):
        pass


