<?php

require 'config.php';

$codigo = $_GET['codigo'];

$sql = "SELECT nome, endereco, idade FROM cliente WHERE codigo = ?";
$sqlSelect = $connect->prepare($sql);
$sqlSelect-> bind_param("i",$codigo);
$sqlSelect->execute();

$resultado = $sqlSelect->get_result();

if($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()){
        $nome = $linha['nome'];
        $endereco = $linha['endereco'];
        $idade = $linha['idade'];
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
    <form method="POST" action="atualizaCliente.php">
      Nome:  <input type="text" name="nome" value="<?php print $nome?>"><br>
      Idade:  <input type="number" name="idade" value="<?php print $idade?>"><br>
      Endereço:  <input type="text" name="endereco" value="<?php print $endereco?>"><br>
      <input type="hidden" name="codigo" value=<?php print $codigo?>>

      <button type='submit'>Alterar</button>
</body>
</html>

