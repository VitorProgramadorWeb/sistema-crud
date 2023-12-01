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
    var campoNome = document.createElement("div");
    campoNome.setAttribute("class", "campo");
    var labelNome = document.createElement("label");
    labelNome.setAttribute("for", "nome");
    var inputNome = document.createElement("input");
    inputNome.setAttribute("type", "text");
    inputNome.setAttribute("name", "nome");
    inputNome.setAttribute("id", "nome");
    campoNome.append(labelNome);
    campoNome.append(inputNome);

    function criarCampo() {
        var campo = "";
    }

    // Email
    var campoEmail = document.createElement("div");
    campoEmail.setAttribute("class", "campo");
    var labelEmail = document.createElement("label");
    labelEmail.setAttribute("for", "email");
    var inputEmail = document.createElement("input");
    inputEmail.setAttribute("type", "email");
    inputEmail.setAttribute("name", "email");
    inputEmail.setAttribute("id", "email");

    // Nascimento
    var campoNascimento = document.createElement("div");
    campoNascimento.setAttribute("class", "campo");
    var labelNascimento = document.createElement("label");
    labelNascimento.setAttribute("for", "email");
    var inputNascimento = document.createElement("input");
    inputNascimento.setAttribute("type", "date");
    inputNascimento.setAttribute("name", "email");
    inputNascimento.setAttribute("id", "email");
    
    /* ----------------------------- APPENDS ----------------------------- */
    popup.append(bar);

    popup.style.width = "200px";
    popup.style.height = "200px";

    popups.append(popup);
    popupElement = document.getElementsByClassName("popup")[0];
    
}