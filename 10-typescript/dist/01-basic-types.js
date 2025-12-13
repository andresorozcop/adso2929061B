"use strict";
// basic types: string, number, boolean, array, tuple, any (ejemplo muy simple)
// nombre de una mascota (string)
const petName = "firulais";
// edad de la mascota (number)
const petAge = 3;
// si la mascota ya comio hoy (boolean)
const hasEaten = false;
// comidas favoritas de la mascota (array de string)
const favoriteFood = ["croquetas", "pollo", "galletas"];
// ultima visita al veterinario como tupla [mes, comentario]
const lastVetVisit = [5, "todo bien, solo vacunas"];
// any: aqui puede ir cualquier cosa, primero pongo un numero
let randomStuff = 123;
// luego cambio el any por un texto, solo para ver que deja
randomStuff = "cosa cambiada";
// mostrar en el navegador
const output01 = document.getElementById('output01');
if (output01) {
    output01.innerHTML = `
        <li><strong>Mascota:</strong> ${petName}</li>
        <li><strong>Edad:</strong> ${petAge}</li>
        <li><strong>Ya comio?:</strong> ${hasEaten}</li>
        <li><strong>Comidas favoritas:</strong> ${favoriteFood}</li>
        <li><strong>Ultima visita al vet:</strong> mes ${lastVetVisit[0]} (${lastVetVisit[1]})</li>
        <li><strong>Any (cosa rara):</strong> ${randomStuff}</li>
    `;
}
