<?php
require 'config.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$codigo = $_POST['codigo'];

$sql = "UPDATE cliente SET nome=?, endereco=?,idade=? WHERE codigo=? ";
$sqlUpdate = $connect->prepare($sql);
$sqlUpdate->bind_param("ssii", $nome, $endereco,$idade,$codigo);
$sqlUpdate->execute();


if($sqlUpdate){
    print "Atualização realizada com sucesso CARALHO";
}else{
    print "Tu fez merda otário, tenta de novo";
}