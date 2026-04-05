// 03 - Functions: sumar precios de cosas de la tienda

// funcion que suma dos precios y devuelve un number
function sumarPrecios(precio1: number, precio2: number): number {
	return precio1 + precio2;
}

// aqui uso la funcion con dos valores
const precioPan: number = 1500;
const precioLeche: number = 3000;
const totalCompra: number = sumarPrecios(precioPan, precioLeche);

// mostrar en el navegador
const output03 = document.getElementById('output03');
if (output03) {
	output03.innerHTML = `
		<li><strong>Precio pan:</strong> ${precioPan}</li>
		<li><strong>Precio leche:</strong> ${precioLeche}</li>
		<li><strong>Total compra:</strong> ${totalCompra}</li>
	`;
}