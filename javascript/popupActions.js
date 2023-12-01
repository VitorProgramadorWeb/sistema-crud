var popupElement = document.getElementsByClassName("popup")[0];
var xPopup;
var yPopup;

// POPUP window
function showWindow() {
    popupElement.style.display = "";
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