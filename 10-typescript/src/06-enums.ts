// 06 - Enums: estados del clima

enum Clima {
	Soleado,
	Lluvioso,
	Nublado
}

// digo que hoy esta lluvioso
const climaDeHoy: Clima = Clima.Lluvioso;

// Display in browser
const output06 = document.getElementById('output06');
if (output06) {
	output06.innerHTML = `
		<li><strong>Clima de hoy:</strong> ${Clima[climaDeHoy]}</li>
		<li><strong>Valor numerico:</strong> ${climaDeHoy}</li>
	`;
}
