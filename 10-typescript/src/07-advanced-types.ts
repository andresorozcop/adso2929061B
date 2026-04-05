// 07 - Advanced Types: union e interseccion muy basicos

// info de un usuario
type UsuarioBase = {
	nombre: string;
};

// info extra de un usuario
type UsuarioExtra = {
	edad: number;
};

// interseccion: une las dos cosas
type UsuarioCompleto = UsuarioBase & UsuarioExtra;

// union: puede ser string o number
type Id = string | number;

const usuario: UsuarioCompleto = { nombre: "carlos", edad: 20 };
const idUsuario: Id = 123; // podria ser "123" tambien

// Display in browser
const output07 = document.getElementById('output07');
if (output07) {
	output07.innerHTML = `
		<li><strong>Usuario:</strong> ${usuario.nombre}</li>
		<li><strong>Edad:</strong> ${usuario.edad}</li>
		<li><strong>Id (union):</strong> ${idUsuario}</li>
	`;
}
