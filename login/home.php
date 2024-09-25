<?php
if (empty($_POST) or (empty($_POST['user']) or empty($_POST['password']))){
header("Location: index.php");
}else{
    echo "teste";
}
?>