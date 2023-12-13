<?php

$servidor     = "localhost";
$bancodedados = "dbcrud";
$usuario      = "root";
$senha        = "";

// CONEXÃO
@$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);

// verificando conexão
if ($conn->connect_error) {
    die("Falha ao CONECTAR ao banco de dados: " . $conn->connect_error);
}

?>