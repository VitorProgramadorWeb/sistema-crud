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
    popup.append(bar);

    /* ----------------------------- FORMULÁRIO ----------------------------- */


    popup.style.width = "200px";
    popup.style.height = "200px";

    popups.append(popup);
    popupElement = document.getElementsByClassName("popup")[0];
    
}