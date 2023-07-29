<?php session_start();
if (empty($_SESSION['id'])) {
    header('Location: ./');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<<<<<<< HEAD
    <title>Casa Raymi</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

=======
    <title>Tienda Shuriken</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
    <link href="../assets/css/estilos.css" rel="stylesheet">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body id="page-top">

<<<<<<< HEAD
    <div id="wrapper">

=======
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
<<<<<<< HEAD
                <img class="logo-img" src="../assets/img/logo1.png">
            </div>
            <div class="sidebar-brand-text mx-3">Casa <sup>Raymi</sup></div>
=======
                <img class="logo-img" src="../assets/img/logo.png">
            </div>
            <div class="sidebar-brand-text mx-3">Tienda <sup>Shuriken</sup></div>
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menús</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">
                    <i class="fas fa-tag"></i>
                    <span>Categorias</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos.php">
                    <i class="fas fa-list"></i>
                    <span>Productos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">
                    <i class="fas fa-users"></i>
                    <span>Usuarios</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pedidos.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Pedidos</span></a>
            </li>
            <li class="nav-item">
<<<<<<< HEAD
=======
                <a class="nav-link" href="clientes.php">
                    <i class="fas fa-user"></i>
                    <span>Clientes</span></a>
            
            </li>
            <li class="nav-item">
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                <a class="nav-link" href="reportes.php">
                    <i class="fas fa-chart-bar"></i>
                    <span>Reportes</span></a>
            </li>
<<<<<<< HEAD
            
            <hr class="sidebar-divider d-none d-md-block">

            
=======
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
<<<<<<< HEAD

        <div id="content-wrapper" class="d-flex flex-column">

=======
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

<<<<<<< HEAD
=======
                    <!-- Topbar Navbar -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                    <ul class="navbar-nav ml-auto">

                        <!-- Botón para ir a la interfaz del cliente -->
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="../index.php">
                                <i class="fas fa-store"></i>
                                <span>Ir a la tienda</span>
                            </a>
                        </li>


<<<<<<< HEAD
                        
=======
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
<<<<<<< HEAD
                            
=======
                            <!-- Dropdown - Messages -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
<<<<<<< HEAD
                        
=======
                        <!-- Nav Item - User Information -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombre']; ?></span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
<<<<<<< HEAD
                            
=======
                            <!-- Dropdown - User Information -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../salir.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
<<<<<<< HEAD
            
                <div class="container-fluid">
=======
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
>>>>>>> 828ff8d (commit inicial - proyecto funcional)
                    