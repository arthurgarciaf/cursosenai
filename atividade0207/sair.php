<?php
session_set_cookie_params(['httpOnly' => true, 'lifetime' => 1]);
session_start();
if(isset($_SESSION['nome'])){
    session_destroy();
    header('Location: index.php');
}else{
    session_destroy();
    header('Location: index.php');
}