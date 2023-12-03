<?php

//$id                 = $_POST['id'];
$nome                 = $_POST['nome'];
$email                = $_POST['email'];
$nascimento           = $_POST['nascimento'];
$renda                = $_POST['renda'];
$cpf                  = $_POST['cpf'];
$cnpj                 = $_POST['cnpj'];
$rua                  = $_POST['rua'];
$numero               = $_POST['numero'];
$complemento          = $_POST['complemento'];
$uf                   = $_POST['uf'];
$cidade               = $_POST['cidade'];
$cep                  = $_POST['cep'];
$telefone_residencial = $_POST['telefone_residencial'];
$telefone_celular     = $_POST['telefone_celular'];

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