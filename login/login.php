<?php
$user =  $_POST['user'];
$password = $_POST['password'];

if ($user=="Admin" && $password=="admin"){
    header("Location: home.php");
}
    else {
        header("Location: index.php");
    }
?>