# coding: utf-8
# Concurso


from Model.resultado import Resultado

class Concurso:
    def __init__(self):
        self.num=''
        self.data=''
        self.valor=2.5 # Valor de aposta Lotofácil
        self.res=''#Recebe Obj. Resultado()
    
    def set(self,num,data,res=None):
        self.num=num
        self.data=data
        self.res=res

    def get(self):
        cc=[self.num,self.data,self.valor,self.res.nums]
        return cc

