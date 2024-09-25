<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="confirmaProduto.php">
        <input type="text" name="nome" placeholder="Digite o nome" required><br>
        <input type="text" name="marca" placeholder="Digite a marca" required><br>
        <input type="number" step=".01" name="valor" placeholder="Digite o valor" required><br>
        <input type="number" name="quantidade" placeholder="Digite a quantidade" required><br>
        <button type="submit">Confirmar</button>
</form>
</body>
</html>