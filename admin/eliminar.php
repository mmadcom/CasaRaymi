<?php
if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "../config/conexion.php";
        $id = $_GET['id'];
        if ($_GET['accion'] == 'pro') {
            $query = mysqli_query($conexion, "DELETE FROM productos WHERE id = $id");
            if ($query) {
                header('Location: productos.php');
            }
        }
        if ($_GET['accion'] == 'cli') {
            $query = mysqli_query($conexion, "DELETE FROM categorias WHERE id = $id");
            if ($query) {
                header('Location: categorias.php');
            }
        }
        if ($_GET['accion'] == 'usu') {
            $query = mysqli_query($conexion, "DELETE FROM usuarios WHERE id = $id");
            if ($query) {
                header('Location: usuarios.php');
            }
        }
        else{
            header('Location: index.php');
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 828ff8d (commit inicial - proyecto funcional)
=======
>>>>>>> ca1c3bf (actualizacion conexion.php)
    }
}
?>