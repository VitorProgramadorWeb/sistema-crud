<?php

// Conecta com o banco de dados
include 'conecta.php';

// Consulta SQL
$sql = "SELECT * FROM tblcliente;";

// Resultado da consulta
$resultado = $conn->query($sql);

//while ($linha = $resultado->fetch_assoc()) {
//    echo "<table style='border: 1px solid;'>";
//        echo "<tr>";
//            echo "<th>Nome</th>";
//            echo "<th>Nascimento</th>";
//            echo "<th>Sexo</th>";
//            echo "<th>E-mail</th>";
//            echo "<th>Telefone</th>";
//        echo "</tr>";
//        echo "<tr>";
//            echo "<td>".$linha['nome']."</td>";
//            echo "<td>".$linha['nascimento']."</td>";
//            echo "<td>".
//            "</td>";
//            echo "<td>".$linha['email']."</td>";
//            echo "<td>".$linha['telefone_celular']."</td>";
//        echo "</tr>";
//    echo "</table>";
//}

// Enviando resultado como JSON
echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));

// Fecha a conexão com o banco de dados
$conn->close();
?>