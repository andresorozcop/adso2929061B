// 04 - Classes: ejemplo con un cuaderno sencillo

// clase que representa un cuaderno
class Notebook {
	nombre: string;
	paginasTotales: number;
	paginasUsadas: number;

	constructor(nombre: string, paginasTotales: number) {
		this.nombre = nombre;
		this.paginasTotales = paginasTotales;
		this.paginasUsadas = 0;
	}

	// metodo para escribir paginas
	escribir(paginas: number): void {
		this.paginasUsadas = this.paginasUsadas + paginas;
	}
}

// creo un cuaderno y le "escribo" algunas paginas
const miCuaderno = new Notebook("cuaderno de clase", 100);
miCuaderno.escribir(5);
miCuaderno.escribir(3);

// Display in browser
const output04 = document.getElementById('output04');
if (output04) {
	output04.innerHTML = `
			<li><strong>Nombre:</strong> ${miCuaderno.nombre}</li>
			<li><strong>Paginas totales:</strong> ${miCuaderno.paginasTotales}</li>
			<li><strong>Paginas usadas:</strong> ${miCuaderno.paginasUsadas}</li>
		`;
}
