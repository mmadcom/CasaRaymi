<?php
// Obtener los valores de las variables de entorno
$servername = getenv('MYSQLHOST');  // Esto es el host de la base de datos
$username = getenv('MYSQLUSER');    // Nombre de usuario para la base de datos
$password = getenv('MYSQLPASSWORD');  // Contraseña para la base de datos
$dbname = getenv('MYSQLDATABASE');  // Nombre de la base de datos

// Crear la conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar la conexión
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
