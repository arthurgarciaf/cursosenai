<?php

$i = $_POST['num1'];
$calc = 1;
while ($i>1){
    $calc *= $i;
    $i--;
}
echo $calc
?>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculado</title>
</head>
<body>
    <br>
    <a href="index.php">Voltar para pagina inicial</a>
</body>
</html>