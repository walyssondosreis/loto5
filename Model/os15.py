# coding: utf-8
# Os 15 Numeros

class Os15:
    '''Classe pai da seq de números'''
    def __init__(self,num_list):
        self.num_list=sorted(num_list)
        self.seq=self.calc_seq()
        self.num_imp=self.calc_imp()
        self.num_par=self.calc_par()
        self.num_prim=self.calc_prim()
    
    def calc_seq(self):
        '''Calcula seq dos números'''
        p1, p2, p3, p4, p5 = 0, 0, 0, 0, 0
        for x in self.num_list:
            if x < 6: p1 += 1
            if 5 < x < 11: p2 += 1
            if 10 < x < 16: p3 += 1
            if 15 < x < 21: p4 += 1
            if x > 20: p5 += 1
        seq = [p1, p2, p3, p4, p5]
        return seq
    
    def calc_imp(self):
        lista = sorted(filter(lambda x: x % 2 != 0, self.num_list))
        return lista
    
    def calc_par(self):
        lista = sorted(filter(lambda x: x % 2 == 0, self.num_list))
        return lista

    def calc_prim(self):
        prim=[2,3,5,7,11,13,17,19,23]
        eprim=[]
        for y in prim:
            for x in prim:
                if y==x: eprim.append(y)
        return eprim



