<?php

////////////
// CREATE //
////////////

$id                   = $_GET['id'];
$nome                 = $_GET['nome'];
$email                = $_GET['email'];
$nascimento           = $_GET['nascimento'];
$renda                = $_GET['renda'];
$cpf                  = $_GET['cpf'];
$cnpj                 = $_GET['cnpj'];
$rua                  = $_GET['rua'];
$numero               = $_GET['numero'];
$complemento          = $_GET['complemento'];
$uf                   = $_GET['uf'];
$cidade               = $_GET['cidade'];
$cep                  = $_GET['cep'];
$telefone_residencial = $_GET['telefone_residencial'];
$telefone_celular     = $_GET['telefone_celular'];

// Conexão com o banco de dados
include '../conectar.php';

// SQL para inserção
$sql = "INSERT INTO tblcliente(nome, email, nascimento, renda, cpf, cnpj, rua, numero, complemento, uf, cidade, cep, telefone_residencial, telefone_celular)
VALUES('$nome', '$email', '$nascimento', '$renda', '$cpf', '$cnpj', '$rua', '$numero', '$complemento', '$uf', '$cidade', '$cep', '$telefone_residencial', '$telefone_celular');";

// Inserindo no banco de dados
if ($conn->query($sql) !== true) {
    echo "Falha ao CRIAR cliente: " . $conn->error;
}

// Fechando a conexão com o banco de dados
$conn->close();

?>