"use strict";
// 13 - Async/Await: esperar un mensajito
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
// funcion que devuelve una promesa con un mensaje
function obtenerMensaje() {
    return __awaiter(this, void 0, void 0, function* () {
        return new Promise((resolve) => {
            setTimeout(() => {
                resolve("mensaje cargado despues de 1 segundo");
            }, 1000);
        });
    });
}
// funcion que usa await para mostrar el mensaje
function mostrarMensaje() {
    return __awaiter(this, void 0, void 0, function* () {
        const msg = yield obtenerMensaje();
        const output13 = document.getElementById('output13');
        if (output13) {
            output13.innerHTML = `<li>${msg}</li>`;
        }
    });
}
// llamo la funcion para que se vea algo en pantalla
mostrarMensaje();
