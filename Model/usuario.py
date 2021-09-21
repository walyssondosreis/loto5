# coding: utf-8
# Usuário (Apostador)


class Usuario:
    def __init__(self):
        pass
    
    def set(self,id,username,nome,data_nasc,cpf,telefone,pix,email,endereco):
        self.id=id
        self.username=username
        self.nome=nome
        self.data_nasc=data_nasc
        self.cpf=cpf
        self.telefone=telefone
        self.pix=pix
        self.email=email
        self.endereco=endereco
        
    def get(self):
        user= [self.id,self.username,self.nome,
                self.data_nasc,self.cpf,
                self.telefone,self.pix,self.email,self.endereco]
        return user
