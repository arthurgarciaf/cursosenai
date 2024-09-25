<?php

if (empty($_POST)){
    echo "Acesso inválido";
}else{
$nome = $_POST['Nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];

echo "Nome: $nome <br> Endereço: $endereco<br> Telefone:$telefone<br> CPF: $cpf";
}
?>