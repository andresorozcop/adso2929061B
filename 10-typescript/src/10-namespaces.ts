// 10 - Namespaces: ejemplo con una calculadora

namespace Calculadora {
	export function sumar(a: number, b: number): number {
		return a + b;
	}

	export function restar(a: number, b: number): number {
		return a - b;
	}
}

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
