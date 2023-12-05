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

        // Adicionando tabela
        containerTabela.append(criarTabela(response));
    };

    // Enviando o pedido
    xmlhttp.open("GET", "consulta.php");
    xmlhttp.send();
}

function criarTabela(dados) {
    // tabela
    var tabela = document.createElement("table");

    ///////////////////////////////////////////////////
    ////////////////////// thead //////////////////////
    ///////////////////////////////////////////////////
    var thead = document.createElement("thead");
    thead.setAttribute("id", "thead");
    
    var tr = document.createElement("tr");
    // Criando th's com base no nome das colunas do banco de dados
    var primeiroCliente = dados[0];
    for (var nomeColuna in primeiroCliente) {
        var th = document.createElement("th");
        th.innerText = nomeColuna;
        
        tr.append(th);
    }
    var th = document.createElement("th"); 
    tr.append(th); // th das opções EDITAR e EXCLUIR
    
    thead.append(tr);
    
    ///////////////////////////////////////////////////
    ////////////////////// tbody //////////////////////
    ///////////////////////////////////////////////////
    var tbody = document.createElement("tbody");
    tbody.setAttribute("id", "tbody");

    // Inserindo os dados de cada cliente
    for (var cliente in dados) {
        var tr = document.createElement("tr");
        
        for (var dadoCliente in dados[cliente]) {
            var td = document.createElement("td");
            td.innerText = dados[cliente][dadoCliente];

            tr.append(td);
        }

        tbody.append(tr);

        // Opções EDITAR e EXCLUIR
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
        tr.append(options);
    }

    tabela.append(thead);
    tabela.append(tbody);

    return tabela;
}