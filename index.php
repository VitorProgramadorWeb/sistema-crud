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
    
    <!-- Barra de navegação -->
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

    <div class="popup" style="display: none;">
        <div class="bar" onmousedown="mousedown(event)" onmouseup="mouseup()">
            <span id="nomelabel">[Nome]</span>
            <button class="close-btn" onclick="closeWindow()">&times;</button>
        </div>
        <form class="formulario" action="inserir.php" method="post">

            <div class="input_div">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            
            <div class="input_div">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            
            <div class="input_div">
                <label for="nascimento">Data de nascimento</label>
                <input type="date" name="nascimento" id="nascimento">
            </div>
            
            <div class="input_div">
                <label for="renda">Renda</label>
                <input type="number" step="0.01" name="renda" id="renda" placeholder="R$">
            </div>
            
            <div class="input_div">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" placeholder="___.___.___-__">
            </div>
            
            <div class="input_div">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" placeholder="__.___.___/____-__">
            </div>
            
            <div class="input_div">
                <label for="rua">Rua</label>
                <input type="text" name="rua" id="rua">
            </div>
            
            <div class="input_div">
                <label for="numero">Nº</label>
                <input type="number" name="numero" id="numero">
            </div>
            
            <div class="input_div">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento">
            </div>
            
            <div class="uf_cidade">
                <div class="input_div">
                    <label for="uf">UF</label>
                    <select name="uf" id="uf">
                        <option value="GO">GO</option>
                    </select>
                </div>
                
                <div class="input_div">
                    <label for="cidade">Cidade</label>
                    <select name="cidade" id="cidade">
                        <option value="anapolis">Anápolis</option>
                    </select>
                </div>
            </div>
            
            <div class="input_div">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" placeholder="_____-___">
            </div>
            
            <div class="input_div">
                <label for="telefone_residencial">Telefone residencial</label>
                <input type="tel" name="telefone_residencial" id="telefone_residencial" placeholder="(__)____-____">
            </div>
            
            <div class="input_div">
                <label for="telefone_celular">Telefone celular</label>
                <input type="tel" name="telefone_celular" id="telefone_celular" placeholder="(__)_____-____">
            </div>
            
            <div class="input_div" class="enviar-button">
                <input class="salvar" type="submit" value="Salvar">
            </div>
        </form>
    </div>

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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="options">
                        <button><img src="imagens/edit.png" alt="editar"></button>
                        <button><img src="imagens/delete.png" alt="excluir"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="teste"></div>

    <!-- Rodapé -->
    <footer>
        Desenvolvido por: Vítor
    </footer>

    <!-- JavaScript -->
    <script>
        function carregarTabela() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                var tabela = JSON.parse(this.response);
                
                document.getElementById("teste").append(tabela);

                // Inserirndo os elementos na tabela
                for (var linha = 0; linha < tabela.length; linha++) {
                    var row = document.createElement("tr");
                    for (var data = 0; data < table[linha].length; data++) {
                        var dado = document.createElement("td");
                        
                        data.innerText = tabela[linha][data];
                    }


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