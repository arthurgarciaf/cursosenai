<?php
    $user = $_POST['nome'];
    $pass = $_POST['senha'];

    if(empty($_POST)){
        header('Location: index.php');
    }else{
        session_set_cookie_params(['httponly' => true, 'lifetime' => 120]);
        session_start();
        $_SESSION['Nome'] = $user;
        $_SESSION['Senha'] = $pass;
        $_SESSION['Cadastrado'] = true;
        echo "Cadastrado com sucesso, para ser redirecionado para a pagina inicial<br><a href='index.php'>Clique aqui</a>";
    }

?>