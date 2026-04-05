"use strict";
// 07 - Advanced Types: union e interseccion muy basicos
const usuario = { nombre: "carlos", edad: 20 };
const idUsuario = 123; // podria ser "123" tambien
// Display in browser
const output07 = document.getElementById('output07');
if (output07) {
    output07.innerHTML = `
		<li><strong>Usuario:</strong> ${usuario.nombre}</li>
		<li><strong>Edad:</strong> ${usuario.edad}</li>
		<li><strong>Id (union):</strong> ${idUsuario}</li>
	`;
}
