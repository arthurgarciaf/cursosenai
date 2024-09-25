<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="cadastrar.php">
        <input type="text" name="nome" placeholder="Insira seu usuário" required><br>
        <input type="password" name="senha" placeholder="Insira sua senha" required><br>
        <button type="submit">Cadastrar</button>
    </form>

    <form method="POST" action="login.php">
        <input type="text" name="nome" placeholder="Insira seu usuário" required><br>
        <input type="password" name="senha" placeholder="Insira sua senha" required><br>
        <button type="submit">Logar</button>
    </form>
    <a href="../">Voltar ao indexador de pastas</a>
</body>
</html>