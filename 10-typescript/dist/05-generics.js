"use strict";
// 05 - Generics: una caja que guarda cosas
// clase generica que guarda un valor de tipo T
class Caja {
    constructor(valor) {
        this.valor = valor;
    }
    obtenerValor() {
        return this.valor;
    }
}
// uso la caja con un string
const cajaDeMensaje = new Caja("hola desde la caja");
// uso la caja con un number
const cajaDeNumero = new Caja(99);
// Display in browser
const output05 = document.getElementById('output05');
if (output05) {
    output05.innerHTML = `
		<li><strong>Caja string:</strong> ${cajaDeMensaje.obtenerValor()}</li>
		<li><strong>Caja number:</strong> ${cajaDeNumero.obtenerValor()}</li>
	`;
}
