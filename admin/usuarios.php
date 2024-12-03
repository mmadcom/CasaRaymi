<?php
require_once "../config/conexion.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $clave = md5($_POST['clave']);
        $query = mysqli_query($conexion, "INSERT INTO usuarios(nombre, usuario, clave) VALUES ('$nombre', '$usuario', '$clave')");
        if ($query) {
            header('Location: usuarios.php');
        }
    }
}

if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "../config/conexion.php";
        $id = $_GET['id'];
        if ($_GET['accion'] == 'usu') {
            $query = mysqli_query($conexion, "DELETE FROM usuarios WHERE id = $id");
            if ($query) {
                header('Location: usuarios.php');
            }
        }
    }
}


include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="abrirProducto"><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $data['nombre']; ?></td>
                            <td><?php echo $data['usuario']; ?></td>
                            <td><a href="usuarios.php?accion=usu&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Eliminar Usuario</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<div id="productos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo isset($_GET['editar']) ? $_GET['editar'] : ''; ?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    </div>
                    <div class="modal-body my-modal-body">
                        <!-- Nombre -->
                        <div class="row mb-3 mt-2 ml-1 mr-0 p-0">
                            <div class="col-md-3">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <!-- Usuario -->
                        <div class="row mb-3 mt-2 ml-1 mr-0 p-0">
                            <div class="col-md-3">
                                <label for="usuario">Usuario</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                            </div>
                        </div>
                        <!-- Contraseña -->
                        <div class="row mb-3 mt-2 ml-1 mr-0 p-0">
                            <div class="col-md-3">
                                <label for="clave">Contraseña</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña"required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                        
                </form>            
            </div>
        </div>
    </div>
</div>

</div>


<?php include("includes/footer.php"); ?>