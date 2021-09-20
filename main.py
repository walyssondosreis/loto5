# coding: utf-8
# LOTO5


from Model.jogo import Jogo
from Model.aposta import Aposta
from Model.usuario import Usuario


#-------------------------------------------------------------------
nums1 = [1, 4, 5, 9, 10, 15, 13, 16, 18, 19, 20, 21, 23, 24, 25]
nums2 = [25, 13, 16, 1, 8, 9, 10, 11, 22, 15, 14, 19, 20, 7, 3] # Desordenado
nums3 = [1, 3, 4, 7, 10, 12, 13, 14, 17, 18, 20, 22, 23, 24, 25]
nums4 = [1, 2, 3, 5, 7, 10, 11, 14, 15, 17, 18, 20, 22, 24, 25]
nums5 = [1, 3, 5, 7, 9, 10, 11, 12, 13, 14, 16, 17, 20, 23, 25]
nums6 = [2, 3, 4, 7, 9, 10, 11, 12, 14, 16, 20, 21, 22, 24, 25]
#-------------------------------------------------------------------
nums7 = [2, 1, 24, 6, 9, 15, 13, 12, 22, 3, 21, 23, 25, 17, 5]
#-------------------------------------------------------------------



# Cadastro de Usuário
user1=Usuario('walyssondosreis')
user1.id=1
user1.nome='Walysson Pereira dos Reis'
user1.data_nasc='13.07.1994'
user1.cpf='115.169.236.00'
user1.telefone='38984337424'
user1.pix=user1.cpf
user1.email='walyssondosreis@gmail.com'
user1.endereco='Rua 16,31,Jardim Olimpico'

# Cadastro de Jogo
jogo1=Jogo(nums1)
# Cadastro de Concurso



print(jogo1.num_list)
print(jogo1.seq)
print(jogo1.num_par)
print(jogo1.num_imp)
print(jogo1.num_prim)





