# coding: utf-8
# Classe da Lista de Números

class NumList:
    '''Classe pai da seq de números'''
    def __init__(self,num_list):
        self.nums=self.validar(num_list)

    def validar(self,list):
        '''Valida sequência de números da entrada.'''
        #Ordena lista de números
        list=sorted(list)
        #Verifica quantidade de números permitidos
        if 15 <= len(list) <=18 : print('Exatos ',len(list),' num')
        elif len(list) <15 : print('ERRO: Menos de 15 num') ; return None
        elif len(list) >18 : print('ERRO: Mais de 18 num'); return None
        else : return None
        #Verifica se só existem números de 1 a 25
        for x in list: 
            if x < 1 or x > 25: 
                print('ERRO: Num não aceito(s) na lista')
                return None
        return list
        
       
    def seq(self):
        '''Calcula seq dos números'''
        p1, p2, p3, p4, p5 = 0, 0, 0, 0, 0
        for x in self.nums:
            if x < 6: p1 += 1
            if 5 < x < 11: p2 += 1
            if 10 < x < 16: p3 += 1
            if 15 < x < 21: p4 += 1
            if x > 20: p5 += 1
        seq = [p1, p2, p3, p4, p5]
        return seq
    
    def imp(self):
        list = sorted(filter(lambda x: x % 2 != 0, self.nums))
        return list
    
    def par(self):
        list = sorted(filter(lambda x: x % 2 == 0, self.nums))
        return list

    def prim(self):
        prim=[2,3,5,7,11,13,17,19,23]
        eprim=[]
        for y in prim:
            for x in self.nums:
                if y==x: eprim.append(y)
        return eprim



