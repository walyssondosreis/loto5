# coding: utf-8
# Classe da Lista de Números

class NumList:
    '''Classe pai da seq de números'''
    def __init__(self,num_list):
        self.nums=num_list

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



