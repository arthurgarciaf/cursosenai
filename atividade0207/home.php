<?php
session_set_cookie_params(['httpOnly' => true, 'lifetime' => 1]);
session_start();
if (isset($_SESSION['nome'])){
    echo  "Você agora está AUTENTICADO, seja bem vindo(a) $_SESSION[nome]";
    echo "<br><a href='sair.php'>Sair</a>";
}else{
    echo " Usuário não autenticado";
}


?>