"use strict";
// 06 - Enums: estados del clima
var Clima;
(function (Clima) {
    Clima[Clima["Soleado"] = 0] = "Soleado";
    Clima[Clima["Lluvioso"] = 1] = "Lluvioso";
    Clima[Clima["Nublado"] = 2] = "Nublado";
})(Clima || (Clima = {}));
// digo que hoy esta lluvioso
const climaDeHoy = Clima.Lluvioso;
// Display in browser
const output06 = document.getElementById('output06');
if (output06) {
    output06.innerHTML = `
		<li><strong>Clima de hoy:</strong> ${Clima[climaDeHoy]}</li>
		<li><strong>Valor numerico:</strong> ${climaDeHoy}</li>
	`;
}
