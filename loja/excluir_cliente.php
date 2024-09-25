<?php

require 'config.php';

$codigo = $_GET['codigo'];

$sql = "DELETE FROM cliente WHERE codigo = ?;";
$sqlDelete = $connect->prepare($sql);
$sqlDelete->bind_param("i", $codigo);
$sqlDelete->execute();

if ($sqlDelete){
    echo "Cliente excluído";
    header("Location: consultarCliente.php");
}else{
    print "Erro ao excluir";
}