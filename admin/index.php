<?php
<<<<<<< HEAD
require_once "../config/conexion.php";
session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $usuario = $_POST['usuario'];
    $clave = md5($_POST['clave']); // Encriptar la clave ingresada

    // Preparar la consulta para evitar inyecciones SQL
    $query = mysqli_prepare($conexion, "SELECT id, nombre FROM usuarios WHERE usuario = ? AND clave = ?");
    mysqli_stmt_bind_param($query, "ss", $usuario, $clave);
    mysqli_stmt_execute($query);
    mysqli_stmt_store_result($query);

    // Verificar si hay coincidencia
    if (mysqli_stmt_num_rows($query) > 0) {
        mysqli_stmt_bind_result($query, $id, $nombre);
        mysqli_stmt_fetch($query);

        // Configurar variables de sesión
        $_SESSION['active'] = true;
        $_SESSION['id'] = $id;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['user'] = $usuario;

        // Redirigir al área de productos
        header('Location: productos.php');
        exit;
    } else {
        $error = "Usuario o clave incorrectos.";
    }
    mysqli_stmt_close($query);
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
=======
session_start();
if (!empty($_SESSION['active'])) {
    header('location: productos.php');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } 
        else {
            require_once "../config/conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
            $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$clave'");
            mysqli_close($conexion);
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id'] = $dato['id'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('Location: productos.php');
            } 
            else {
                $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Contraseña incorrecta
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                session_destroy();
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/sb-admin-2.min.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>
<<<<<<< HEAD
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
=======

<body class="bg-gradient-primary">

    <div class="container">

        
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img class="img-thumbnail" src="../assets/img/tienda.jpg" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
<<<<<<< HEAD
                                        <h1 class="h4 text-gray-900 mb-4">Iniciar Sesión</h1>
                                        <?php if (isset($error)) { echo "<p class='text-danger'>$error</p>"; } ?>
                                    </div>
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="usuario" placeholder="Usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="clave" placeholder="Contraseña" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Acceder</button>
=======
                                        <h1 class="h4 text-gray-900 mb-4">Ingrese su usuario y contraseña.</h1>
                                        <?php echo (isset($alert)) ? $alert : ''; ?>
                                    </div>
                                    <form class="user" method="POST" action="" autocomplete="off">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="usuario" name="usuario" placeholder="Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="clave" name="clave" placeholder="Contraseña">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Iniciar Sesión
                                        </button>
                                        <hr>
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                                    </form>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                    </div> 
                </div>
            </div>
        </div>
=======
                    </div>
                </div>

            </div>

        </div>

>>>>>>> 828ff8d (commit inicial - proyecto funcional)
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
<<<<<<< HEAD
    <script src="../assets/js/jquery.easing.min.js"></script>
    <script src="../assets/js/sb-admin-2.min.js"></script>
</body>
</html>
=======

    <!-- Core plugin JavaScript-->
    <script src="../assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
