<?php
require 'config.php';
$sql = "SELECT * from cliente";
$resultado = $connect->query($sql);

if($resultado->num_rows > 0){

print "<table border='1'>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Endereco</th>
            <th>Idade</th>
            <th>Ação</th>
        </tr>";
        while($linha = $resultado->fetch_assoc()){
            print "<tr>
                    <td>" . $linha['codigo'] . "</td>
                    <td>" . $linha['nome'] . "</td>
                    <td>" . $linha['endereco'] . "</td>
                    <td>" . $linha['idade'] . "</td>
                    <td> <a href='editar_cliente.php?codigo=" . $linha['codigo'] . "'> Editar</a><td>
                    <td> <a href='excluir_cliente.php?codigo=" . $linha['codigo'] . "'> Excluir</a><td>
            </tr>";
        }
}else{
    print "Nenhum usuário cadastrado";
}
