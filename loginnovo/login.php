<?php
session_start();
if (isset($_SESSION['Cadastrado'])){
    if($_POST['nome'] == $_SESSION['Nome'] && $_POST['senha'] == $_SESSION['Senha']){
    header("Location: home.php");
    }else{
        echo "Senha ou nome incorretos!";
    }
}else{
    echo "Você ainda não se cadastrou";
}

?>