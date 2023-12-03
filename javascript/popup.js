///////////////////////////////////////////////
//         Adicionar e Remover POPUP         //
///////////////////////////////////////////////

function addPopup(popupName = "", popupContent = none()) {
    // Container dos popups
    var popups = document.getElementById("popups");

    // Popup
    var popup = document.createElement("div");
    popup.setAttribute("class", "popup");

    /* ----------------------------- CABEÇALHO ----------------------------- */
    // Bar
    var bar = document.createElement("div");
    bar.setAttribute("class", "bar");
    bar.setAttribute("onmousedown", "mousedown(event)");
    bar.setAttribute("onmouseup", "mouseup()");

    // Close button
    var closeButton = document.createElement("button");
    closeButton.setAttribute("class", "close-btn");
    closeButton.setAttribute("onclick", "removePopup(this)");
    closeButton.innerHTML = "&times;";

    // Name bar
    var nameBar = document.createElement("span");
    nameBar.style.margin = "0px 10px";
    nameBar.innerText = popupName;
    
    /* ----- appends ----- */
    bar.append(nameBar);
    bar.append(closeButton);

    popup.append(bar);
    popup.append(popupContent);

    popups.append(popup);
}

function removePopup(closeButton) {
    // Popup > bar > closeButton
    closeButton.parentElement.parentElement.remove();
}










///////////////////////////////////////////////
//              Conteúdos POPUP              //
///////////////////////////////////////////////

function formulario() {
    /* ----------------------------- FORMULÁRIO ----------------------------- */
    // Form
    var form = document.createElement("form");
    form.setAttribute("class", "formulario");
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

function configuracoes() {
    
}

function none() {
    var none = document.createElement("div");
    none.style.width = "200px";
    none.style.height = "150px";

    return none;
}









//////////////////////////////////////////////
//            Outras ações POPUP            //
//////////////////////////////////////////////

var popupElement = document.getElementsByClassName("popup")[0];
var xPopup;
var yPopup;


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