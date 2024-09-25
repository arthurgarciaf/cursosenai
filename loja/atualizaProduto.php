<?php
require 'config.php';

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$codigo = $_POST['codigo'];

$sql = "UPDATE produto SET nome=?, marca=?,valor=?, quantidade=? WHERE codigo=? ";
$sqlUpdate = $connect->prepare($sql);
$sqlUpdate->bind_param("ssiii", $nome, $marca ,$valor ,$quantidade,$codigo);
$sqlUpdate->execute();


if($sqlUpdate){
    print "Atualização realizada com sucesso CARALHO";
    header('Location: consultarProduto.php');
}else{
    print "Tu fez merda otário, tenta de novo";
}