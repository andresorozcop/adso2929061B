// 08 - Decorators: decorador sencillo que solo muestra en consola

function LogClase(constructor: Function) {
	console.log("se creo una clase con decorador", constructor.name);
}

@LogClase
class UsuarioDecorado {
	nombre = "usuario anonimo";

	describir() {
		return "hola soy " + this.nombre;
	}
}

const usuarioDecorado = new UsuarioDecorado();

// Display in browser
const output08 = document.getElementById('output08');
if (output08) {
	output08.innerHTML = `
		<li>${usuarioDecorado.describir()}</li>
	`;
}
