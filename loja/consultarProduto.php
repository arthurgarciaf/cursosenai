<?php
require 'config.php';
$sql = "SELECT * from PRODUTO";
$resultado = $connect->query($sql);

if($resultado->num_rows > 0){

print "<table border='1'>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Ação</th>
        </tr>";
        while($linha = $resultado->fetch_assoc()){
            print "<tr>
                    <td>" . $linha['codigo'] . "</td>
                    <td>" . $linha['nome'] . "</td>
                    <td>" . $linha['marca'] . "</td>
                    <td>" . $linha['valor'] . "</td>
                    <td>" . $linha['quantidade'] . "</td>
                    <td> <a href='editar_produto.php?codigo=" . $linha['codigo'] . "'> Editar</a><td>
                    <td> <a href='excluir_produto.php?codigo=" . $linha['codigo'] . "'> Excluir</a><td>
            </tr>";
        }
}else{
    print "Nenhum produto cadastrado";
}
