<?php

$server = "localhost";
$user = "root";
$password = "";
$name = "lojas";

$connect = mysqli_connect($server, $user, $password, $name);

if ($connect){
    print "Conexão realizada com sucesso!";
}else{
    print "Falha na conexão: ";
}