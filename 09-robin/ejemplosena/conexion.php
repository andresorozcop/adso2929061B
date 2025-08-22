<?php
// Datos de conexión
$servidor = "localhost"; 
$usuario = "root";
$clave   = "";
$bd      = "ejemplosena"; 

// Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

// Verificar conexión
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>