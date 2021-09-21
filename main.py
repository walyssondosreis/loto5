# coding: utf-8
# LOTO5

from Model.resultado import Resultado
from Model.jogo import Jogo
from Model.aposta import Aposta
from Model.usuario import Usuario
#-------------------------------------------------------------------
# Cadastro de Jogo
#-------------------------------------------------------------------
j1 =Jogo('Jogo_Teste01',[1,2,3, 4, 5,7, 9, 10, 15, 13, 16, 18, 19,20, 22,23,24,25])
j2 =Jogo('Jogo_Teste02',[25, 13, 16, 1, 8, 9, 10, 11, 22, 15, 14, 19, 20, 7, 3])
j3 =Jogo('Jogo_Teste03',[1, 3, 4, 7, 10, 12, 13, 14, 17, 18, 20, 22, 23, 24, 25])
j4 =Jogo('Jogo_Teste04',[1, 2, 3, 5, 7, 10, 11, 14, 15, 17, 18, 20, 22, 24, 25])
j5 =Jogo('Jogo_Teste05',[1, 3, 5, 7, 9, 10, 11, 12, 13, 14, 16, 17, 20, 23, 25])
j6 =Jogo('Jogo_Teste06',[2, 3, 4, 7, 9, 10, 11, 12, 14, 16, 20, 21, 22, 24, 25])
#-------------------------------------------------------------------
# Cadastro de Resultado
#-------------------------------------------------------------------
r1 =Resultado(1,'21.09.20',[2, 1, 24, 6, 9, 15, 13, 12, 22, 3, 21, 23, 25, 17, 5])
#-------------------------------------------------------------------
# Cadastro de Usuário
#-------------------------------------------------------------------
u1=Usuario()
u1.set(1,'walyssondosreis','Walysson Pereira dos Reis','94.07.13',
    '11516923600','38984334724','11516923600','walyssondosreis@gmail.com',
    'Rua 16,31,Jardim Olimpico,Montes Claros,MG,Brasil')
#print(u1.get())
u2=Usuario()
u2.set(2,'vilmapsouza','Vilma Pereira de Souza','63.12.01',
    '37945866955','38985669965','38985669965','vilmapsouza@gmail.com',
    'Rua J,79,Dona Gregoria,Montes Claros,MG,Brasil')
#print(u2.get())
#-------------------------------------------------------------------
# Cadastro de Aposta
#-------------------------------------------------------------------
ap1=Aposta()
ap1.set(1,u1,r1,j1,'vox')
print(ap1.get())















