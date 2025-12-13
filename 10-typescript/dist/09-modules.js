"use strict";
// 09 - Modules: ejemplo muy simple sin imports reales
// imagina que esto esta en un modulo de "saludos"
class Saludador {
    constructor(nombre) {
        this.nombre = nombre;
    }
    saludar() {
        return "hola " + this.nombre;
    }
}
// aqui uso la clase como si la hubiera importado de otro archivo
const saludador = new Saludador("modulo falso");
// Display in browser
const output09 = document.getElementById('output09');
if (output09) {
    output09.innerHTML = `
		<li>${saludador.saludar()}</li>
	`;
}
