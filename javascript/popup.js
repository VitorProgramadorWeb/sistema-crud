///////////////////////////////////////////////
//         Adicionar e Remover POPUP         //
///////////////////////////////////////////////

function addPopup(popupName = "", popupContent = none()) {
    // Container dos popups
    var popups = document.getElementById("popups");

    // Popup
    var popup = document.createElement("div");
    popup.setAttribute("class", "popup");
    popup.style.top = "150px";
    popup.style.left = "100px";
    // Para colocar um deslocamento do popup anterior
    var lastPopup = popups.lastChild;
    if (lastPopup != null) {
        var topLastPopup = lastPopup.style.top;
        var leftLastPopup = lastPopup.style.left;
        popup.style.top = (Number(topLastPopup.substring(0, topLastPopup.length-2)) + 5) + "px";
        popup.style.left = (Number(leftLastPopup.substring(0, leftLastPopup.length-2)) - 5) + "px";
    }

    /* ----------------------------- CABEÇALHO ----------------------------- */
    // Bar
    var bar = document.createElement("div");
    bar.setAttribute("class", "bar");
    bar.setAttribute("onmousedown", "mouseDown(event, this)");
    bar.setAttribute("onmouseup", "mouseUp()");

    // Name bar
    var nameBar = document.createElement("span");
    nameBar.setAttribute("class", "nameBar");
    nameBar.innerText = popupName;

    // Close button
    var closeButton = document.createElement("button");
    closeButton.setAttribute("class", "closeButton");
    closeButton.setAttribute("onmousedown", "event.stopPropagation()");
    closeButton.setAttribute("onclick", "removePopup(this)");
    closeButton.innerHTML = "&times;";
    
    /* ----- appends ----- */
    bar.append(nameBar);
    bar.append(closeButton);

    popup.append(bar);
    popup.append(popupContent);

    popups.append(popup);
}

function removePopup(element) {
    // Popup > bar > closeButton
    while(element.tagName != "BODY") {
        if(element.className == "popup") {
            element.remove();
            return;
        } else {
            element = element.parentElement;
        }
    }
}










///////////////////////////////////////////////
//              Conteúdos POPUP              //
///////////////////////////////////////////////

function formulario() {
    /* ----------------------------- FORMULÁRIO ----------------------------- */
    // Form
    var form = document.createElement("form");
    form.setAttribute("class", "popupContent formulario");
    form.setAttribute("action", "inserir.php");
    form.setAttribute("method", "post");
    
    // ----- Campos ----- //
    // Nome
    var campoNome = criarCampo("Nome", "nome", "text");

    // Email
    var campoEmail = criarCampo("E-mail", "email", "email");

    // Nascimento
    var campoNascimento = criarCampo("Nascimento", "nascimento", "date");
    
    // Renda
    var campoRenda = criarCampo("Renda", "renda", "number");
    // step="0.01"
    // placeholder="R$"

    // CPF
    var campoCpf = criarCampo("CPF", "cpf", "text");
    // placeholder="___.___.___-__"
    
    // CNPJ
    var campoCnpj = criarCampo("CNPJ", "cnpj", "text");
    // placeholder="__.___.___/____-__"

    // Rua
    var campoRua = criarCampo("Rua", "rua", "text");

    // Nº
    var campoNumero = criarCampo("Nº", "numero", "number");

    // Complemento
    var campoComplemento = criarCampo("Complemento", "complemento", "text");

    // UF e Cidade [Campos tipo SELECT (e dentros de outra div)]
    // var campoUf = criarCampo();
    // var campoCidade = criarCampo();

    // CEP
    var campoCep = criarCampo("CEP", "cep", "text");
    // placeholder="_____-___"

    // Telefone residencial
    var campoTelefoneResidencial = criarCampo("Telefone residencial", "telefoneResidencial", "tel");
    // placeholder="(__)____-____"

    // Telefone celular
    var campoTelefoneCelular = criarCampo("Telefone celular", "telefoneCelular", "tel");
    // placeholder="(__)_____-____"

    // Botão: SALVAR
    // var botaoSalvar = criarCampo();

    form.append(campoNome);
    form.append(campoEmail);
    form.append(campoNascimento);
    form.append(campoRenda);
    form.append(campoCpf);
    form.append(campoCnpj);
    form.append(campoRua);
    form.append(campoNumero);
    form.append(campoComplemento);
    // form.append(campoUf);
    // form.append(campoCidade);
    form.append(campoCep);
    form.append(campoTelefoneResidencial);
    form.append(campoTelefoneCelular);
    // form.append(botaoSalvar);

    return form;


    
    function criarCampo(labelText, inputID, inputType) {
        // Campo
        var campo = document.createElement("div");
        campo.setAttribute("class", "campo");
    
        // Label
        var label = document.createElement("label");
        label.setAttribute("for", inputID);
        label.innerText = labelText;
    
        // Input
        var input = document.createElement("input");
        input.setAttribute("type", inputType);
        input.setAttribute("name", inputID);
        input.setAttribute("id", inputID);
        //input.setAttribute("placeholder", "");
    
        campo.append(label);
        campo.append(input);
        return campo;
    }
}

function configuracao() {
    
}

function none() {
    var none = document.createElement("div");
    none.setAttribute("class", "popupContent");
    // size
    none.style.width = "200px";
    none.style.height = "150px";

    return none;
}










//////////////////////////////////////////////
//            Outras ações POPUP            //
//////////////////////////////////////////////
var lastPopup;
var xPopup;
var yPopup;

// Mover popup [mouseDown -> movePopup -> mouseUp]
function mouseDown(e, bar) {
    // Elemento popup
    var popup = bar.parentElement;

    // Focar no popup
    popupFocus(popup);

    // Capturar os movimentos do mouse na página inteira
    document.addEventListener("mousemove", movePopup);
    lastPopup = popup;

    var popupLeft = window.getComputedStyle(popup).getPropertyValue("left");
    var popupTop = window.getComputedStyle(popup).getPropertyValue("top");
    
    xPopup = e.pageX - Number(popupLeft.substring(0, popupLeft.length-2));
    yPopup = e.pageY - Number(popupTop.substring(0, popupTop.length-2));
}
function movePopup(e) {
    lastPopup.style.top = (e.pageY - yPopup) + "px";
    lastPopup.style.left = (e.pageX - xPopup) + "px";
}
function mouseUp() {
    document.removeEventListener("mousemove", movePopup);
}


// Colocar o popup na frente
function popupFocus(popup) {
    while(popup.tagName != "BODY") {
        if(popup.className == "popup") {
            document.getElementById("popups").append(popup);
            return;
        } else {
            popup = popup.parentElement;
        }
    }
}