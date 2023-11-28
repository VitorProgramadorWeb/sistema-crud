<?php

$servidor     = "localhost";
$bancodedados = "dbcrud";
$usuario      = "root";
$senha        = "";

// CONEXÃO
$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);

// verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso<br>";
?>