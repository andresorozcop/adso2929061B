// 13 - Async/Await: esperar un mensajito

// funcion que devuelve una promesa con un mensaje
async function obtenerMensaje(): Promise<string> {
	return new Promise((resolve) => {
		setTimeout(() => {
			resolve("mensaje cargado despues de 1 segundo");
		}, 1000);
	});
}

// funcion que usa await para mostrar el mensaje
async function mostrarMensaje() {
	const msg = await obtenerMensaje();
	const output13 = document.getElementById('output13');
	if (output13) {
		output13.innerHTML = `<li>${msg}</li>`;
	}
}

// llamo la funcion para que se vea algo en pantalla
mostrarMensaje();
