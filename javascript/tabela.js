function carregarTabela() {
    // AJAX
    var xmlhttp = new XMLHttpRequest();

    // Ao receber a resposta
    xmlhttp.onload = function() {

        // Pegando a resposta JSON
        var response = JSON.parse(this.response);
        
        // Container da tabela
        var containerTabela = document.getElementById("containerTabela");
        containerTabela.innerHTML = ""; // Tira a imagem de erro

        //
        for (var i = 0; i<response.length; i++) {
            containerTabela.append(Object.keys(response[i]));
            containerTabela.append(document.createElement("br"));
        }

    };

    // Enviando o pedido
    xmlhttp.open("GET", "consulta.php");
    xmlhttp.send();
}

function criarTabela(dados) {
    // tabela
    var tabela = document.createElement("table");

    // thead
    var thead = document.createElement("thead");
    thead.setAttribute("id", "thead");

    

    // tbody
    var tbody = document.createElement("tbody");
    tbody.setAttribute("id", "tbody");

    tabela.append(thead);
    tabela.append(tbody);

    return tabela;

    // Inserirndo os elementos na tabela
    for (var linha = 0; linha < response.length; linha++) {
        var row = document.createElement("tr");
        for (var data = 0; data < response[linha].length; data++) {
            var dado = document.createElement("td");
            
            dado.innerText = response[linha][data];
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
}