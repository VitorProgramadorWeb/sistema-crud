<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Sistema CRUD</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="item-menu"><a href="" onclick="showWindow()">Inserir</a></li>
            <li class="item-menu">Listar</li>
            <li class="item-menu">Alterar</li>
            <li class="item-menu">Deletar</li>
        </ul>
    </nav>

    <div id="popup">
        <div id="bar" onmousedown="mousedown(event)" onmouseup="mouseup()">
            <span id="nome">[Nome]</span>
            <button class="close-btn" onclick="closeWindow()">&times;</button>
        </div>
    </div>

    <div class="tabela">
        conteudo
    </div>

    <footer>
        <span>Desenvolvido por: Vítor</span>
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