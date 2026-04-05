"use strict";
// 17 - Challenge: panel de clima sencillo
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
// enum para el estado del clima
var EstadoClima;
(function (EstadoClima) {
    EstadoClima["Soleado"] = "Soleado";
    EstadoClima["Lluvioso"] = "Lluvioso";
    EstadoClima["Nublado"] = "Nublado";
})(EstadoClima || (EstadoClima = {}));
// clase que maneja un pequeño panel de clima
class PanelClima {
    constructor(ciudades) {
        this.ciudades = ciudades;
    }
    render(elementId) {
        const contenedor = document.getElementById(elementId);
        if (!contenedor)
            return;
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
function obtenerIcono(estado) {
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
function cargarCiudades() {
    return __awaiter(this, void 0, void 0, function* () {
        return new Promise((resolve) => {
            setTimeout(() => {
                const datos = [
                    { nombre: "Bogota", temperatura: 18, estado: EstadoClima.Nublado },
                    { nombre: "Medellin", temperatura: 24, estado: EstadoClima.Soleado },
                    { nombre: "Cali", temperatura: 30, estado: EstadoClima.Soleado },
                    { nombre: "Cartagena", temperatura: 32, estado: EstadoClima.Lluvioso },
                ];
                resolve(datos);
            }, 1000); // tarda 1 segundo para simular espera
        });
    });
}
// funcion principal para iniciar el panel
function iniciarPanelClima() {
    return __awaiter(this, void 0, void 0, function* () {
        const output17 = document.getElementById("output17");
        if (output17) {
            output17.innerHTML = "<p>Cargando clima...</p>";
        }
        const ciudades = yield cargarCiudades();
        const panel = new PanelClima(ciudades);
        panel.render("output17");
    });
}
// iniciar cuando se cargue el script
iniciarPanelClima();
