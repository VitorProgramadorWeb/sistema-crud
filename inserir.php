<?php

//$id                 = $_GET['id'];
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
$telefone_residencial = $_GET['telefoneResidencial'];
$telefone_celular     = $_GET['telefoneCelular'];

// Conexão com o banco de dados
include 'conecta.php';

// SQL para inserção
$sql = "INSERT INTO tblcliente(nome, email, nascimento, renda, cpf, cnpj, rua, numero, complemento, uf, cidade, cep, telefone_residencial, telefone_celular)
VALUES('$nome', '$email', '$nascimento', '$renda', '$cpf', '$cnpj', '$rua', '$numero', '$complemento', '$uf', '$cidade', '$cep', '$telefone_residencial', '$telefone_celular');";

// Inserindo no banco de dados
if ($conn->query($sql) === true) {
    echo "<br>Usuário $nome cadastrado com sucesso.";
} else {
    echo "<br>Não foi possível cadastrar o usuário $nome. " . $conn->error;
}

// Fechando a conexão com o banco de dados
$conn->close();

?>