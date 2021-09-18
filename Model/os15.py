# coding: utf-8
# Os 15 Numeros

class Os15:
    '''Classe pai da seq de números'''
    def __init__(self):
        self.num_list=[]
        self. seq=[]
        self.num_imp=[]
        self.num_par=[]
        self.num_prim=[]
    
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
        
    def ord_num(self):
        '''Ordena lista de números'''
        pass

