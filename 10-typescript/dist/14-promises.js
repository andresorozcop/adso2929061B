"use strict";
// 14 - Promises: promesa sencilla de conexion
function revisarConexion() {
    return new Promise((resolve, reject) => {
        const conectado = true; // aqui finjo que si hay internet
        setTimeout(() => {
            if (conectado) {
                resolve("hay conexion a internet");
            }
            else {
                reject("no hay conexion");
            }
        }, 800);
    });
}
revisarConexion()
    .then((mensaje) => {
    const output14 = document.getElementById('output14');
    if (output14) {
        output14.innerHTML = `<li>${mensaje}</li>`;
    }
})
    .catch((error) => {
    const output14 = document.getElementById('output14');
    if (output14) {
        output14.innerHTML = `<li style="color:red;">${error}</li>`;
    }
});
