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
                addPopup("Criar Novo", formulario("inserir"));
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

    </div>

    <!-- Rodapé -->
    <footer>Desenvolvido por: Vítor</footer>
</body>

</html>