<?php

if(empty($_GET) || empty('itemBuscado')){
    print 'Nenhum produto foi buscado<br>';

}else{
    $item = $_GET['itemBuscado'];
print 'Produto encontrado<br>';
print "O produto $item está na promoção!! <br>";
print '90% de desconto, compre agora!!!<br>';
}
?>