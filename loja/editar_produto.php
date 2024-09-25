<?php

require 'config.php';

$codigo = $_GET['codigo'];

$sql = "SELECT nome,marca,valor,quantidade FROM produto WHERE codigo = ?";
$sqlSelect = $connect->prepare($sql);
$sqlSelect-> bind_param("i",$codigo);
$sqlSelect->execute();

$resultado = $sqlSelect->get_result();

if($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()){
        $nome = $linha['nome'];
        $marca = $linha['marca'];
        $valor = $linha['valor'];
        $quantidade = $linha['quantidade'];
    }
}else{
    print "Usuário não cadastrado";
}

$sqlSelect->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
</head>
<body>
    <form method="POST" action="atualizaProduto.php">
      Nome:  <input type="text" name="nome" value="<?php print $nome?>"><br>
      Marca:  <input type="text" name="marca" value="<?php print $marca?>"><br>
      Valor:   <input type="number" step=".01" name="valor" value="<?php print $valor?>"><br>
      Quantidade:  <input type="text" name="quantidade" value="<?php print $quantidade?>"><br>
      <input type="hidden" name="codigo" value=<?php print $codigo?>>

      <button type='submit'>Alterar</button>
</body>
</html>

