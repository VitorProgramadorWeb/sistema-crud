function addPopup() {
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
    closeButton.setAttribute("onclick", "closeWindow()");
    closeButton.innerHTML = "&times;";

    // Name bar
    var nameBar = document.createElement("span");
    nameBar.innerText = "Exemplo";
    
    bar.append(nameBar);
    bar.append(closeButton);

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
    


    popup.append(bar);
    popup.append(form);

    popups.append(popup);
    popupElement = document.getElementsByClassName("popup")[0]; // Para mover o popup com o mouse
    
}

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