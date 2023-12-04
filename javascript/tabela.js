function carregarTabela() {
    // AJAX
    var xmlhttp = new XMLHttpRequest();

    // Ao receber a resposta
    xmlhttp.onload = function() {

        // Container da tabela
        var containerTabela = document.getElementById("containerTabela");
        containerTabela.innerHTML = "";

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

    // Enviando o pedido
    xmlhttp.open("GET", "consulta.php");
    xmlhttp.send();
}

