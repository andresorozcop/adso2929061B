// 16 - Mixins: combinar dos habilidades en una sola clase

class PuedeCantar {
	cantar() {
		return "lalala";
	}
}

class PuedeBailar {
	bailar() {
		return "bailando lento";
	}
}

class PersonaArtista implements PuedeCantar, PuedeBailar {
	nombre: string = "artista";
	cantar!: () => string;
	bailar!: () => string;
}

function aplicarMixins(derivedCtor: any, baseCtors: any[]) {
	baseCtors.forEach((baseCtor) => {
		Object.getOwnPropertyNames(baseCtor.prototype).forEach((name) => {
			derivedCtor.prototype[name] = baseCtor.prototype[name];
		});
	});
}

aplicarMixins(PersonaArtista, [PuedeCantar, PuedeBailar]);

const artista = new PersonaArtista();

// Display in browser
const output16 = document.getElementById('output16');
if (output16) {
	output16.innerHTML = `
		<li><strong>Persona:</strong> ${artista.nombre}</li>
		<li>${artista.cantar()}</li>
		<li>${artista.bailar()}</li>
	`;
}
