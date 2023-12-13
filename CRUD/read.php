<?php

////////////
//  READ  //
////////////

//$id                   = $_GET['id'];
//$nome                 = $_GET['nome'];
//$email                = $_GET['email'];
//$nascimento           = $_GET['nascimento'];
//$renda                = $_GET['renda'];
//$cpf                  = $_GET['cpf'];
//$cnpj                 = $_GET['cnpj'];
//$rua                  = $_GET['rua'];
//$numero               = $_GET['numero'];
//$complemento          = $_GET['complemento'];
//$uf                   = $_GET['uf'];
//$cidade               = $_GET['cidade'];
//$cep                  = $_GET['cep'];
//$telefone_residencial = $_GET['telefone_residencial'];
//$telefone_celular     = $_GET['telefone_celular'];

// Conexão com o banco de dados
include '../conectar.php';

// Consulta SQL
$sql = "SELECT * FROM tblcliente;";

// Resultado da consulta
$resultado = $conn->query($sql);

if($resultado !== false) {
    // Enviando resultado como JSON
    header('Content-Type: application/json');
    echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));
} else {
    echo "Falha ao LER o banco de dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();

?>