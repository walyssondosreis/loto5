# coding: utf-8
# LOTO5
from jogo import *


jogo1 = [1, 4, 5, 9, 10, 15, 13, 16, 18, 19, 20, 21, 23, 24, 25]
jogo2 = [1, 3, 4, 7, 9, 10, 11, 13, 14, 15, 17, 20, 21, 23, 25]
jogo3 = [1, 3, 4, 7, 10, 12, 13, 14, 17, 18, 20, 22, 23, 24, 25]
jogo4 = [1, 2, 3, 5, 7, 10, 11, 14, 15, 17, 18, 20, 22, 24, 25]
jogo5 = [1, 3, 5, 7, 9, 10, 11, 12, 13, 14, 16, 17, 20, 23, 25]
jogo6 = [2, 3, 4, 7, 9, 10, 11, 12, 14, 16, 20, 21, 22, 24, 25]

resultado = [2, 1, 24, 6, 9, 15, 13, 12, 22, 3, 21, 23, 25, 17, 5]

#GRUPO DE APOSTAS

#GRUPO DE RESULTADOS


print("RESULTADO: ",resultado)
j1=Jogo(jogo2)
print(j1.seq_verificar())
j11=j1.pontos_verificar(resultado)
print(j11['pontos'])
print(j1.duplicado_verificar(jogo6))

