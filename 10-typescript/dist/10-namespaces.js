"use strict";
// 10 - Namespaces: ejemplo con una calculadora
var Calculadora;
(function (Calculadora) {
    function sumar(a, b) {
        return a + b;
    }
    Calculadora.sumar = sumar;
    function restar(a, b) {
        return a - b;
    }
    Calculadora.restar = restar;
})(Calculadora || (Calculadora = {}));
const resultadoSuma = Calculadora.sumar(4, 2);
const resultadoResta = Calculadora.restar(4, 2);
// Display in browser
const output10 = document.getElementById('output10');
if (output10) {
    output10.innerHTML = `
		<li><strong>Suma 4 + 2:</strong> ${resultadoSuma}</li>
		<li><strong>Resta 4 - 2:</strong> ${resultadoResta}</li>
	`;
}
