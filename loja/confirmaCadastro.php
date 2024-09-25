<?php
require 'config.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];

$sql = "INSERT INTO cliente (nome, endereco, idade) VALUES (?,?,?)";
$sqlInsert = $connect->prepare($sql);
$sqlInsert->bind_param("ssi", $nome, $endereco,$idade);
$sqlInsert->execute();