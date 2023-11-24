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
            <span id="nome">[Nome]</span>
            <button class="close-btn" onclick="closeWindow()">&times;</button>
        </div>
        <form action="">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone">

            <label for="idade">Idade</label>
            <input type="number" name="idade" id="">

            <p>Sexo</p>
            <input type="radio" name="sexo" id="masculino" value="masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" name="sexo" id="" value="feminino">
            <label for="feminino">Feminino</label>

            <input type="submit" value="Salvar">
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