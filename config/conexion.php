<?php
<<<<<<< HEAD
    $host = "localhost";
    $user = "root";
    $clave = "";
<<<<<<< HEAD
    $bd = "bd_raymi";
=======
    $bd = "bd_shuriken";
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
=======
// Obtener los valores de las variables de entorno
$servername = getenv('MYSQLHOST');  // Esto es el host de la base de datos
$username = getenv('MYSQLUSER');    // Nombre de usuario para la base de datos
$password = getenv('MYSQLPASSWORD');  // Contraseña para la base de datos
$dbname = getenv('MYSQLDATABASE');  // Nombre de la base de datos

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
>>>>>>> ca1c3bf (actualizacion conexion.php)
