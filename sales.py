print("Qual seu nome, vendedor?")
name = input()

print("Qual o seu salário fixo?")

salario = float(input())

print("Quanto você vendeu este mês?")

preco = float(input())
# Encontrar a comissão do vendedor que é de 15%
print(name,"você irá ganhar", salario + (preco*0.15))