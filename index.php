<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Sistema CRUD</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <link rel="stylesheet" href="tabela.css" type="text/css">
    <link rel="stylesheet" href="popup.css" type="text/css">
</head>
<body>
    
    <nav>
        <ul class="menu">
            <li class="item-menu"><a href="" onclick="showWindow()">Inserir</a></li>
            <li class="item-menu"><a href="">Listar</a></li>
            <li class="item-menu"><a href="">Alterar</a></li>
            <li class="item-menu"><a href="">Deletar</a></li>
        </ul>
    </nav>

    <div id="popup">
        <div id="bar" onmousedown="mousedown(event)" onmouseup="mouseup()">
            <span id="nomelabel">[Nome]</span>
            <button class="close-btn" onclick="closeWindow()">&times;</button>
        </div>
        <form class="formulario" action="">

            <div class="input_div">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            
            <div class="input_div">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            
            <div class="input_div">
                <label for="datadenascimento">Data de nascimento</label>
                <input type="date" name="datadenascimento" id="datadenascimento">
            </div>
            
            <div class="input_div">
                <label for="renda">Renda</label>
                <input type="number" name="renda" id="renda" placeholder="R$">
            </div>
            
            <div class="input_div">
                <label for="CPF">CPF</label>
                <input type="number" name="CPF" id="CPF" placeholder="___.___.___-__">
            </div>
            
            <div class="input_div">
                <label for="CNPJ">CNPJ</label>
                <input type="number" name="CNPJ" id="CNPJ" placeholder="__.___.___/____-__">
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
                    <label for="UF">UF</label>
                    <select name="UF" id="UF">
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
                <label for="CEP">CEP</label>
                <input type="text" name="CEP" id="CEP" placeholder="_____-___">
            </div>
            
            <div class="input_div">
                <label for="telefoneresidencial">Telefone residencial</label>
                <input type="tel" name="telefoneresidencial" id="telefoneresidencial" placeholder="(__)____-____">
            </div>
            
            <div class="input_div">
                <label for="telefonecelular">Telefone celular</label>
                <input type="tel" name="telefonecelular" id="telefonecelular" placeholder="(__)_____-____">
            </div>
            
            <div class="input_div" class="enviar-button">
                <input class="salvar" type="submit" value="Salvar">
            </div>
        </form>
    </div>

    <div class="tabela">
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th></th>
            </tr>
            <tr>
                <td>Exemplo Da Silva Nunes</td>
                <td>22</td>
                <td>Masculino</td>
                <td>exemplo@email.com</td>
                <td>(62)99999-9999</td>
                <td class="options">
                    <a href=""><img src="edit.png" alt="editar"></a>
                    <a href=""><img src="delete.png" alt="excluir"></a>
                </td>
            </tr>
            <tr>
                <td>Exemplo Da Silva Nunes</td>
                <td>22</td>
                <td>Masculino</td>
                <td>exemplo@email.com</td>
                <td>(62)99999-9999</td>
                <td class="options">
                    <a href=""><img src="edit.png" alt="editar"></a>
                    <a href=""><img src="delete.png" alt="excluir"></a>
                </td>
            </tr>
            <tr>
                <td>Exemplo Da Silva Nunes</td>
                <td>22</td>
                <td>Masculino</td>
                <td>exemplo@email.com</td>
                <td>(62)99999-9999</td>
                <td class="options">
                    <a href=""><img src="edit.png" alt="editar"></a>
                    <a href=""><img src="delete.png" alt="excluir"></a>
                </td>
            </tr>
            <tr>
                <td>Exemplo Da Silva Nunes</td>
                <td>22</td>
                <td>Masculino</td>
                <td>exemplo@email.com</td>
                <td>(62)99999-9999</td>
                <td class="options">
                    <a href=""><img src="edit.png" alt="editar"></a>
                    <a href=""><img src="delete.png" alt="excluir"></a>
                </td>
            </tr>
            <tr>
                <td>Exemplo Da Silva Nunes</td>
                <td>22</td>
                <td>Masculino</td>
                <td>exemplo@email.com</td>
                <td>(62)99999-9999</td>
                <td class="options">
                    <a href=""><img src="edit.png" alt="editar"></a>
                    <a href=""><img src="delete.png" alt="excluir"></a>
                </td>
            </tr>
        </table>
    </div>

    <footer>
        Desenvolvido por: Vítor
    </footer>

    <!-- JavaScript -->
    <script>
        var popupElement = document.getElementById("popup");
        var xPopup;
        var yPopup;

        // POPUP window
        function showWindow() {
            popupElement.style.display = "block";
        }
        function closeWindow() {
            popupElement.style.display = "none";
            popupElement.style.top = "50%";
            popupElement.style.left = "50%";
        }

        function mousedown(e) {
            document.addEventListener("mousemove", move);

            var popupLeft = window.getComputedStyle(popupElement).getPropertyValue("left");
            var popupTop = window.getComputedStyle(popupElement).getPropertyValue("top");
            
            xPopup = e.pageX - Number(popupLeft.substring(0, popupLeft.length-2));
            
            yPopup = e.pageY - Number(popupTop.substring(0, popupTop.length-2));
        }
        function move(e) {
            
            popupElement.style.top = (e.pageY - yPopup) + "px";
            popupElement.style.left = (e.pageX - xPopup) + "px";

        }
        function mouseup() {
            document.removeEventListener("mousemove", move);
        }
    </script>
</body>
</html>