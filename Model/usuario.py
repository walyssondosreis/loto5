# coding: utf-8
# Usuário (Apostador)


class Usuario:
    def __init__(self,usr):
        self.id=''
        self.username=usr
        self.nome=''
        self.data_nasc=''
        self.cpf=''
        self.telefone=''
        self.pix=''
        self.email=''
        self.endereco=''
    
    def reg(self):
        user= [self.id,self.username,self.nome,
                self.data_nasc,self.cpf,
                self.telefone,self.pix,self.email,self.endereco]
        return user
