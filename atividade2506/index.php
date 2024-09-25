<?php
echo "1 - Pequena<br>";
echo "2 - Média<br>";
echo "3 - Grande<br>";

$tamanho = 1;
switch ($tamanho) {
    case 1:
        echo "Pequena<br>";
        $resumo = "Pequena";
        $verify = 1;
        break;
    case 2:
        echo "Média<br>";
        $resumo = "Média";
        $verify = 1;
        break;
    case 3:
        echo "Grande<br>";
        $resumo = "Grande";
        $verify = 1;
        break;
    default:
        echo "Tamanho inválido<br>";
        $verify == 2;
        break;
}
if ($verify == 1){
    echo "Qual o sabor da pizza?<br>";

    echo "1 - Coração<br>";
    echo "2 - Peperoni<br>";
    echo "3 - Frango Catupiry<br>";
}else{
    echo "Tamanho inválido<br>";
}
$sabor = 2;
switch ($sabor) {
    case 1:
        echo "Coração<br>";
        $resumo2 = "Coração<br>";
        $verify2 = 1;
        break;
    case 2:
        echo "Peperoni<br>";
        $resumo2 = "Peperoni<br>";
        $verify2 = 1;
        break;
    case 3:
        echo "Frango Catupiry<br>";
        $resumo2 = "Frango Catupiry<br>";
        $verify2 = 1;
        break;
    default:
        echo "Sabor inválido<br>";
        $verify2 = 2;
        break;
}

if ($verify2 == 1){
    echo "Sua pizza é $resumo no sabor $resumo2<br>";
    echo "<a href='../'>Voltar ao indexador de pastas</a>";
}
?>