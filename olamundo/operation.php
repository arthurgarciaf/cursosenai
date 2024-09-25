<?php

$nume1 = $_POST['num1'];
$nume2 = $_POST['num2'];
$soma = $nume1 + $nume2;
$subt = $nume1 - $nume2;
$mult = $nume1 * $nume2;
echo "A soma é ".$soma."<br>";
echo "A subtração é ".$subt."<br>"; 
echo "A multiplicação é ".$mult."<br>"; 
if ($nume2 == 0) {
    echo("Não é divisivel por 0");
    }
    else
    {
    $div = $nume1 / $nume2;
    echo "A divisão é ".$div."<br>"; 
    } 
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