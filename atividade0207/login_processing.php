<?php

$user = $_POST['user'];
$pass = $_POST['pass'];


if($user == "Arthur" && $pass == "1234"){

    session_set_cookie_params(['httpOnly' => true, 'lifetime' => 3]);

    session_start(); // cria arquivo de sessão no server-side
    $_SESSION['nome'] = $user; // Atribui valor da variável USER para a sessão
    header("Location: home.php"); // Redireciona para a página home
}else{
    echo "Usuário ou senha incorretos, tente novamente";
}

?>