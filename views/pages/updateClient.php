<?php
include_once "../../controllers/ClientController.php";
$clientsController = new ClientController;
$client = $clientsController->getClient();
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Clientes</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Clientes</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../../index.php" class="nav-link">
                                <i class="fa-solid fa-house"></i>
                                <p>
                                    Inicio
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Actualizar Cliente</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="id-form" action="../../?action=update" method="POST">
                                        <div class="card-body">
                                            <input type="hidden" name="tipo_documento" value="<?php echo $client['tipo_documento'] ?>">
                                            <input type="hidden" name="numero_documento" value="<?php echo $client['numero_documento'] ?>">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombre</label>
                                                <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $client['nombre'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Dirección</label>
                                                <input class="form-control" id="direccion" type="text" name="direccion" placeholder="Ingrese su dirección" value="<?php echo $client['direccion'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Teléfono</label>
                                                <input class="form-control" id="telefono" type="number" name="telefono" placeholder="Ingrese su teléfono" value="<?php echo $client['telefono'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo electronico</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo" value="<?php echo $client['email'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombre persona de contacto</label>
                                                <input class="form-control" type="text" id="nombre_contacto" name="nombre_contacto" placeholder="Ingrese el nombre de la persona de contacto" value="<?php echo $client['nombre_contacto'] ?>">
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">
                                                Actualizar cliente
                                            </button>
                                            <a href="../../index.php" role="button">
                                                <button type="button" class="btn btn-secondary"">Cancelar</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

       <!-- Control Sidebar -->
       <aside class=" control-sidebar control-sidebar-dark">
                                                    <!-- Control sidebar content goes here -->
                                                    <div class="p-3">
                                                        <h5>Title</h5>
                                                        <p>Sidebar content</p>
                                                    </div>
                                                    </aside>
                                                    <!-- /.control-sidebar -->

                                                    <!-- Main Footer -->
                                                    <footer class="main-footer">
                                                        <!-- Default to the left -->
                                                        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
                                                    </footer>
                                        </div>

                                        <!-- ./wrapper -->

                                        <!-- REQUIRED SCRIPTS -->

                                        <!-- jQuery -->
                                        <script src="../plugins/jquery/jquery.min.js"></script>
                                        <!-- Bootstrap 4 -->
                                        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                                        <!-- AdminLTE App -->
                                        <script src="../dist/js/adminlte.min.js"></script>
                                        <!-- jquery-validation -->
                                        <script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
                                        <script src="../plugins/jquery-validation/additional-methods.min.js"></script>
                                        <script>
                                            $(function() {
                                                $('#id-form').validate({
                                                    rules: {
                                                        nombre: {
                                                            required: true,
                                                            maxlength: 100
                                                        },
                                                        direccion: {
                                                            required: true,
                                                            maxlength: 100
                                                        },
                                                        telefono: {
                                                            required: true,
                                                            maxlength: 10
                                                        },
                                                        email: {
                                                            required: true,
                                                            email: true
                                                        },
                                                        nombre_contacto: {
                                                            required: true,
                                                            maxlength: 100
                                                        },
                                                    },
                                                    messages: {
                                                        nombre: {
                                                            required: "Por favor ingrese el nombre",
                                                            maxlength: "El nombre no debe ser mayor a 100 caracteres"
                                                        },
                                                        direccion: {
                                                            required: "Por favor ingrese la dirección",
                                                            maxlength: "La dirección no debe ser mayor a 100 caracteres"
                                                        },
                                                        telefono: {
                                                            required: "Por favor ingrese el teléfono",
                                                            maxlength: "El télefono no debe ser mayor a 10 caracteres"
                                                        },
                                                        email: {
                                                            required: "Por favor ingrese el correo",
                                                            email: "Por favor ingrese un correo válido"
                                                        },
                                                        nombre_contacto: {
                                                            required: "Por favor ingrese el nombre de la persona de contacto",
                                                            maxlength: "El nombre no debe ser mayor a 100 caracteres"
                                                        }
                                                    },
                                                    errorElement: 'span',
                                                    errorPlacement: function(error, element) {
                                                        error.addClass('invalid-feedback');
                                                        element.closest('.form-group').append(error);
                                                    },
                                                    highlight: function(element, errorClass, validClass) {
                                                        $(element).addClass('is-invalid');
                                                    },
                                                    unhighlight: function(element, errorClass, validClass) {
                                                        $(element).removeClass('is-invalid');
                                                    }
                                                });
                                            });
                                        </script>
</body>

</html>