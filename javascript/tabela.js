var colunas = [
    "id",
    "nome",               
    "email",              
    "nascimento",         
    "renda",              
    "cpf",                
    "cnpj",               
    "rua",                
    "numero",             
    "complemento",        
    "uf",                 
    "cidade",             
    "cep",                
    "telefone_residencial",
    "telefone_celular"      
];

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
    tr.setAttribute("class", "trSticky");
    // Criando th's com base no nome das colunas do banco de dados
    for (var i in colunas) {
        var th = document.createElement("th");
        th.innerText = colunas[i];
        
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

            if (colunas.find(function(value){return value == dadoCliente})) {
                var td = document.createElement("td");
                td.innerText = dados[cliente][dadoCliente];
    
                tr.append(td);
            }
        }

        tbody.append(tr);

        // Opções EDITAR e EXCLUIR
        var options = document.createElement("td");
        options.setAttribute("class", "options");

        var buttonEdit = document.createElement("button");
        buttonEdit.setAttribute("onclick", "editar(this)");
        var imgEdit = document.createElement("img");
        imgEdit.setAttribute("src", "imagens/edit.png");
        imgEdit.setAttribute("alt", "editar");
        buttonEdit.append(imgEdit);
        
        var buttonDelete = document.createElement("button");
        buttonDelete.setAttribute("onclick", "excluir(this)");
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





// EDITAR e EXCLUIR
function editar(el) {

    // Abrir o popup de editar
    var popup = addPopup("Editar", formulario("editar"));

    // Encontrando o TR
    while(el.tagName != "TABLE") {
        if(el.tagName == "TR") {

            var tds = el.getElementsByTagName("td");

            for (var coluna in colunas) {
                var input = popup.querySelector("#"+colunas[coluna]);
                input.setAttribute("value", tds[coluna].innerText);
            }

            return;
        } else {
            el = el.parentElement;
        }
    }
}

function excluir(el) {
    // Encontrando o TR
    while(el.tagName != "TABLE") {
        if(el.tagName == "TR") {
            var tds = el.getElementsByTagName("td");

            var param = "?";
            for (var coluna in colunas) {
                param += colunas[coluna]+"="+tds[coluna].innerText+"&";
            }
            param = param.substring(0, param.length-1); // - ...&

            // AJAX
            var xmlhttp = new XMLHttpRequest();

            // Ao receber a resposta
            xmlhttp.onload = function() {
                carregarTabela();
            };

            // Enviando o pedido
            xmlhttp.open("GET", "excluir.php"+param);
            xmlhttp.send();

            return;
        } else {
            el = el.parentElement;
        }
    }
}