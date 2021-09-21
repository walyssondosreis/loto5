# coding: utf-8
# Concurso


from Model.resultado import Resultado

class Concurso:
    def __init__(self):
        pass
    
    def set(self,num,data,res=None):
        self.num=num
        self.data=data
        self.res=res #Recebe Obj. Resultado()

    def get(self):
        cc=[self.num,self.data,self.res.nums]
        return cc

