<?php
require 'config.php';

$nome = $_POST['nome'];
$marca = $_POST['marca'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produto (nome, marca, valor,quantidade) VALUES (?,?,?,?)";
$sqlInsert = $connect->prepare($sql);
$sqlInsert->bind_param("ssdi", $nome, $marca,$valor,$quantidade);
$sqlInsert->execute();