// 02 - Interfaces: estructura sencilla de un contacto

// aqui digo como debe ser un contacto
interface Contacto {
	nombre: string;
	telefono: string;
	esFavorito: boolean;
}

// creo un contacto que sigue la interfaz
const miContacto: Contacto = {
	nombre: "mama",
	telefono: "3001234567",
	esFavorito: true
};

// mostrar en el navegador
const output02 = document.getElementById('output02');

if (output02) {
	output02.innerHTML = `
		<li><strong>Nombre:</strong> ${miContacto.nombre}</li>
		<li><strong>Telefono:</strong> ${miContacto.telefono}</li>
		<li><strong>Es favorito?:</strong> ${miContacto.esFavorito}</li>
	`;
}
