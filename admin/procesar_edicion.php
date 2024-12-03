<?php
require_once "../config/conexion.php";

// Verificar si se enviaron los datos del formulario por el método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $id_producto = $_GET['id']; // Recuperamos el ID del producto desde la URL
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio_normal = $_POST['precio_normal'];
    $precio_rebajado = $_POST['precio_rebajado'];

    // Validar y procesar los datos si es necesario (por ejemplo, verificar si los precios son válidos)

    // Actualizar los datos del producto en la base de datos
    $query = mysqli_query($conexion, "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio_normal = '$precio_normal', precio_rebajado = '$precio_rebajado' WHERE id = $id_producto");

    // Verificar si la actualización fue exitosa
    if ($query) {
        // Redirigir de vuelta a la página del administrador con un mensaje de éxito
        header('Location: admin.php?mensaje=Producto actualizado correctamente');
        exit();
    } else {
        // Redirigir de vuelta a la página del administrador con un mensaje de error
        header('Location: admin.php?error=Error al actualizar el producto');
        exit();
    }
} else {
    // Redirigir de vuelta a la página del administrador si no se recibieron datos por POST
    header('Location: admin.php');
    exit();
}

// Verificar si se recibió el parámetro "id" en la URL
if (isset($_GET['id'])) {
    // Obtener el ID del producto desde la URL
    $id_producto = $_GET['id'];

    // Consultar los datos del producto en la base de datos
    $query = mysqli_query($conexion, "SELECT * FROM productos WHERE id = $id_producto");

    // Verificar si el producto existe
    if (mysqli_num_rows($query) > 0) {
        // Obtener los datos del producto
        $data_producto = mysqli_fetch_assoc($query);
    } else {
        // Redirigir de vuelta a la página del administrador si el producto no existe
        header('Location: admin.php');
        exit();
    }
} else {
    // Redirigir de vuelta a la página del administrador si no se proporcionó el parámetro "id"
    header('Location: admin.php');
    exit();
}

// Verificar si se enviaron los datos del formulario por el método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio_normal = $_POST['precio_normal'];
    $precio_rebajado = $_POST['precio_rebajado'];

    // Actualizar los datos del producto en la base de datos
    $stmt = $conexion->prepare("UPDATE productos SET nombre = ?, descripcion = ?, precio_normal = ?, precio_rebajado = ? WHERE id = ?");
    $stmt->bind_param("ssdds", $nombre, $descripcion, $precio_normal, $precio_rebajado, $id_producto);

    if ($stmt->execute()) {
        // Redirigir de vuelta a la página del administrador con un mensaje de éxito
        header('Location: admin.php?mensaje=Producto actualizado correctamente');
        exit();
    } else {
        // Redirigir de vuelta a la página del administrador con un mensaje de error
        header('Location: admin.php?error=Error al actualizar el producto');
        exit();
    }
}
?>
