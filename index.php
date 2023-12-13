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
                addPopup("Criar Novo", formulario("CRUD/create"));
            }
            function configuracoes() {
                addPopup("Configurações");
            }
        </script>
    </nav>

    <!-- Popups -->
    <div id="popups"></div>

    <!-- Tabela -->
    <div id="containerTabela"></div>

    <!-- Rodapé -->
    <footer>Desenvolvido por: Vítor</footer>
</body>

</html>