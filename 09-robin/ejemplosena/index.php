<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "ejemplosena");

// Verificar conexión
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Consulta
$sql = "SELECT nombre, telefono FROM usuario";
$resultado = mysqli_query($conexion, $sql);

// Crear la tabla en HTML
echo "<h2>Lista de usuarios</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nombre</th><th>Teléfono</th></tr>";

// Recorrer los datos y agregarlos a la tabla
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["telefono"] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Cerrar conexión
mysqli_close($conexion);
?>