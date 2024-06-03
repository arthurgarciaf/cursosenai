print("Insira seu nome")
name = input()
print("Olá,",name," digite sua primeira nota")
primNota = float(input())
print("Agora insira sua segunda nota")
segNota = float(input())
print("Agora digite a sua terceira nota")
triNota = float(input())
mediaNota = (primNota+segNota+triNota)/3
if mediaNota >= 7:
    print(f"Você foi aprovado, sua média é:{mediaNota:.2f}")
elif (mediaNota <= 5):
    print(f"Você foi reprovado, sua nota foi:{mediaNota:.2f}")
else:
    print(f"Você está de recuperação, sua nota foi:{mediaNota:.2f}")