<?php

if (empty($_POST)){ 
    echo "Input inválido";
}else{
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade >= 18){
    echo "$nome é maior de idade";
    }else{
        if ($idade < 0){
        echo "Idade inválida";
        }else{
            "$nome é menor de idade";
        }
    }
}
?>