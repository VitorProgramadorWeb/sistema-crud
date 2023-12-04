<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Sistema CRUD</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos/estilo.css" type="text/css">
    <link rel="stylesheet" href="estilos/tabela.css" type="text/css">
    <link rel="stylesheet" href="estilos/popup.css" type="text/css">
    <script src="javascript/tabela.js"></script>
    <script src="javascript/popup.js"></script>
</head>

<body onload="carregarTabela()">
    <!-- Menu -->
    <nav>
        <ul id="menu">
            <li><button class="itemMenu" onclick="criarNovo()">Criar novo</button></li>
            <li><button class="itemMenu" onclick="configuracoes()">Configurações</button></li>
        </ul>

        <!-- Script -->
        <script>
            function criarNovo() {
                addPopup("Criar Novo", formulario());
            }
            function configuracoes() {
                addPopup("Configurações");
            }
        </script>
    </nav>

    <!-- Popups -->
    <div id="popups"></div>

    <!-- Tabela -->
    <div id="containerTabela">

        <!-- Imagem é substituída ao carregar o banco de dados -->
        <abbr title="❌📂 Não foi possível carregar o banco de dados">
            <img src="imagens/erro.png" alt="Erro" style="width: 80vmin;">
        </abbr>
        <!--
        <table>
            <thead id="thead">
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
                    <th></th> //options
                    </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>
        -->
    </div>

    <!-- Rodapé -->
    <footer>Desenvolvido por: Vítor</footer>
</body>

</html>