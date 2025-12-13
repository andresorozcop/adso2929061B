// 11 - Type Guards: revisar si algo es string o number

function esString(valor: unknown): valor is string {
	return typeof valor === "string";
}

const datoRaro: unknown = "hola";
let mensajeTipo: string;

if (esString(datoRaro)) {
	mensajeTipo = "es un string: " + datoRaro;
} else {
	mensajeTipo = "no es un string";
}

// Display in browser
const output11 = document.getElementById('output11');
if (output11) {
	output11.innerHTML = `<li>${mensajeTipo}</li>`;
}
