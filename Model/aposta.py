# coding: utf-8
# Aposta


#from Model.jogo import Jogo
#from Model.usuario import Usuario
#from Model.concurso import Concurso


class Aposta:
    def __init__(self):
        self.id=''
        self.nome=''
        self.grupo=''
        self.pag=False
        self.cc='' #Recebe Obj. Concurso()
        self.usuario='' #Recebe Obj. Usuario()
        self.jogo='' #Recebe Obj. Jogo()
   
    def set(self,user,cc,jogo,nome,grupo):
        self.usuario=user
        self.cc=cc
        self.jogo=jogo
        self.nome=nome
        self.grupo=grupo

    def get(self):
        cc=[self.id,self.nome,self.grupo,
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


