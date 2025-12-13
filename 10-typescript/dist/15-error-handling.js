"use strict";
// 15 - Error Handling: intentar convertir texto a numero
function convertirANumero(texto) {
    const resultado = Number(texto);
    if (isNaN(resultado)) {
        throw new Error("no se pudo convertir a numero");
    }
    return resultado;
}
let mensajeError;
try {
    const numero = convertirANumero("123x"); // aqui va a fallar
    mensajeError = "numero convertido: " + numero;
}
catch (error) {
    mensajeError = "hubo un error: " + error.message;
}
// Display in browser
const output15 = document.getElementById('output15');
if (output15) {
    output15.innerHTML = `<li>${mensajeError}</li>`;
}
