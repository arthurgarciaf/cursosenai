<?php
if (empty($_GET)){
    echo "Input inválido";
}else{
    $item = $_GET['item_buscado'];
    echo "Produto encontrado<br>";
    echo "O produto $item está na promoção!! <br>";
    echo "90% de desconto, compre agora!!!<br>";
}