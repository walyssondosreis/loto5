# coding: utf-8
# Concurso


from Model.resultado import Resultado

class Concurso:
    def __init__(self,num):
        self.num=num
        self.data=''
        self.valor=2.5 # Valor de aposta Lotofácil
        self.res=''#Recebe Obj. Resultado()
    
    def get(self):
        cc=[self.num,self.data,self.valor]
        return cc

