// 17 - Challenge: panel de clima sencillo

// interface para ciudad
interface Ciudad {
	nombre: string;
	temperatura: number;
	estado: EstadoClima;
}

// enum para el estado del clima
enum EstadoClima {
	Soleado = "Soleado",
	Lluvioso = "Lluvioso",
	Nublado = "Nublado"
}

// clase que maneja un pequeño panel de clima
class PanelClima {
	constructor(public ciudades: Ciudad[]) { }

	render(elementId: string): void {
		const contenedor = document.getElementById(elementId);
		if (!contenedor) return;

		contenedor.innerHTML = `
			<div class="weather-container">
				<h2>Clima de hoy</h2>
				<div class="cities-grid">
					${this.ciudades
						.map((c) => `
							<div class="city-card">
								<h3>${c.nombre}</h3>
								<p class="temp">${c.temperatura} °C</p>
								<p class="state">${obtenerIcono(c.estado)} ${c.estado}</p>
							</div>
						`)
						.join("")}
				</div>
			</div>
		`;
	}
}

// funcion auxiliar para mostrar un "icono" segun el estado del clima
function obtenerIcono(estado: EstadoClima): string {
	switch (estado) {
		case EstadoClima.Soleado:
			return "☀";
		case EstadoClima.Lluvioso:
			return "☂";
		case EstadoClima.Nublado:
			return "☁";
		default:
			return "";
	}
}

// simulacion de cargar datos de clima desde "servidor"
async function cargarCiudades(): Promise<Ciudad[]> {
	return new Promise((resolve) => {
		setTimeout(() => {
			const datos: Ciudad[] = [
				{ nombre: "Bogota", temperatura: 18, estado: EstadoClima.Nublado },
				{ nombre: "Medellin", temperatura: 24, estado: EstadoClima.Soleado },
				{ nombre: "Cali", temperatura: 30, estado: EstadoClima.Soleado },
				{ nombre: "Cartagena", temperatura: 32, estado: EstadoClima.Lluvioso },
			];
			resolve(datos);
		}, 1000); // tarda 1 segundo para simular espera
	});
}

// funcion principal para iniciar el panel
async function iniciarPanelClima() {
	const output17 = document.getElementById("output17");
	if (output17) {
		output17.innerHTML = "<p>Cargando clima...</p>";
	}

	const ciudades = await cargarCiudades();
	const panel = new PanelClima(ciudades);
	panel.render("output17");
}

// iniciar cuando se cargue el script
iniciarPanelClima();
