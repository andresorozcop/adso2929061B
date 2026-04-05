// 05 - Generics: una caja que guarda cosas

// clase generica que guarda un valor de tipo T
class Caja<T> {
	private valor: T;

	constructor(valor: T) {
		this.valor = valor;
	}

	obtenerValor(): T {
		return this.valor;
	}
}

// uso la caja con un string
const cajaDeMensaje = new Caja<string>("hola desde la caja");

// uso la caja con un number
const cajaDeNumero = new Caja<number>(99);

// Display in browser
const output05 = document.getElementById('output05');
if (output05) {
	output05.innerHTML = `
		<li><strong>Caja string:</strong> ${cajaDeMensaje.obtenerValor()}</li>
		<li><strong>Caja number:</strong> ${cajaDeNumero.obtenerValor()}</li>
	`;
}
