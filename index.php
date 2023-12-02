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
</head>
<body onload="carregarTabela()">
    
    <!-- Menu -->
    <nav>
        <ul class="menu">
            <li class="item-menu"><button onclick="showWindow()">Inserir</button></li>
            <li class="item-menu"><button onclick="carregarTabela()">Listar</button></li>
            <li class="item-menu"><button onclick="addPopup()">Alterar</button></li>
            <li class="item-menu"><button>Deletar</button></li>
        </ul>
    </nav>

    <!-- Popups -->
    <div id="popups"></div>

    <!-- Tabela -->
    <div class="tabela">
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

    <!-- JavaScript -->
    <script>
        function carregarTabela() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                var tabela = JSON.parse(this.response);

                // Inserirndo os elementos na tabela
                for (var linha = 0; linha < tabela.length; linha++) {
                    var row = document.createElement("tr");
                    for (var data = 0; data < tabela[linha].length; data++) {
                        var dado = document.createElement("td");
                        
                        dado.innerText = tabela[linha][data];
                        row.append(dado);
                    }

                    // Options
                    var options = document.createElement("td");
                    options.setAttribute("class", "options");

                    var buttonEdit = document.createElement("button");
                    var imgEdit = document.createElement("img");
                    imgEdit.setAttribute("src", "imagens/edit.png");
                    imgEdit.setAttribute("alt", "editar");
                    buttonEdit.append(imgEdit);
                    
                    var buttonDelete = document.createElement("button");
                    var imgDelete = document.createElement("img");
                    imgDelete.setAttribute("src", "imagens/delete.png");
                    imgDelete.setAttribute("alt", "excluir");
                    buttonDelete.append(imgDelete);

                    options.append(buttonEdit);
                    options.append(buttonDelete);
                    row.append(options);

                    document.getElementById("tbody").append(row);
                }

            };
            xmlhttp.open("GET", "consulta.php");
            xmlhttp.send();
        }
    </script>
    <script src="javascript/popupActions.js"></script>
    <script src="javascript/addPopup.js"></script>
</body>
</html>