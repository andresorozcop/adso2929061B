"use strict";
// 12 - Utility Types: Partial y Readonly simples
// tarea que no se puede cambiar
const tareaFija = {
    titulo: "estudiar ts",
    descripcion: "ver ejemplos basicos",
    completada: false
};
// tarea incompleta usando Partial
const tareaParcial = {
    titulo: "hacer ejercicio"
};
// Display in browser
const output12 = document.getElementById('output12');
if (output12) {
    output12.innerHTML = `
		<li><strong>Tarea fija:</strong> ${tareaFija.titulo} - completada: ${tareaFija.completada}</li>
		<li><strong>Tarea parcial (solo titulo):</strong> ${tareaParcial.titulo}</li>
	`;
}
