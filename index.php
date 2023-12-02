<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Sistema CRUD</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos/estilo.css" type="text/css">
    <link rel="stylesheet" href="estilos/tabela.css" type="text/css">
    <link rel="stylesheet" href="estilos/popup.css" type="text/css">
    <script src="javascript/jquery-3.7.1.min.js"></script>
    <script src="javascript/popupActions.js"></script>
    <script src="javascript/addPopup.js"></script>
    <script src="javascript/table.js"></script>
</head>

<body onload="carregarTabela()">
    <!-- Menu -->
    <nav>
        <ul class="menu">
            <li class="item-menu"><button onclick="criarNovo()">Criar novo</button></li>
            <li class="item-menu"><button onclick="configuracoes()">Configurações</button></li>
        </ul>
    </nav>

    <!-- Popups -->
    <div id="popups"></div>

    <!-- Tabela -->
    <div id="tabela">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Nascimento</th>
                    <th>Renda</th>
                    <th>CPF</th>
                    <th>CNPJ</th>
                    <th>Rua</th>
                    <th>Nº</th>
                    <th>Complemento</th>
                    <th>UF</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Telefone residencial</th>
                    <th>Telefone celular</th>
                    <th>CEP</th>
                    <th></th> <!-- options -->
                </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
    </div>

    <!-- Rodapé -->
    <footer>Desenvolvido por: Vítor</footer>
</body>

</html>