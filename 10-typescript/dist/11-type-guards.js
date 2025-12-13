"use strict";
// 11 - Type Guards: revisar si algo es string o number
function esString(valor) {
    return typeof valor === "string";
}
const datoRaro = "hola";
let mensajeTipo;
if (esString(datoRaro)) {
    mensajeTipo = "es un string: " + datoRaro;
}
else {
    mensajeTipo = "no es un string";
}
// Display in browser
const output11 = document.getElementById('output11');
if (output11) {
    output11.innerHTML = `<li>${mensajeTipo}</li>`;
}
