<?php

////////////
// UPDATE //
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
include 'conectar.php';

// SQL para inserção
$sql = "UPDATE tblcliente 
SET nome='$nome', email='$email', nascimento='$nascimento', renda='$renda', cpf='$cpf', cnpj='$cnpj', rua='$rua', numero='$numero', complemento='$complemento', uf='$uf', cidade='$cidade', cep='$cep', telefone_residencial='$telefone_residencial', telefone_celular='$telefone_celular'
WHERE id='$id'";

// Inserindo no banco de dados
if ($conn->query($sql) === true) {
    echo "<br>Usuário $id alterado com sucesso.";
} else {
    echo "<br>Não foi possível alterar o usuário $id. " . $conn->error;
}

// Fechando a conexão com o banco de dados
$conn->close();

?>