"use strict";
// 08 - Decorators: decorador sencillo que solo muestra en consola
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
function LogClase(constructor) {
    console.log("se creo una clase con decorador", constructor.name);
}
let UsuarioDecorado = class UsuarioDecorado {
    constructor() {
        this.nombre = "usuario anonimo";
    }
    describir() {
        return "hola soy " + this.nombre;
    }
};
UsuarioDecorado = __decorate([
    LogClase
], UsuarioDecorado);
const usuarioDecorado = new UsuarioDecorado();
// Display in browser
const output08 = document.getElementById('output08');
if (output08) {
    output08.innerHTML = `
		<li>${usuarioDecorado.describir()}</li>
	`;
}
