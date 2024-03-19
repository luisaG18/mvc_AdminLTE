<?php
include_once "controllers/ClientController.php";
$clientsController = new ClientController;
$clients = $clientsController->getClients()
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
  <link rel="stylesheet" href="views/style.css">
  <!-- <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="views/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="views/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
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
        <img src="views/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
              <a href="index.php" class="nav-link">
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
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Clientes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <div class="breadcrumb float-sm-right">
                <a href="views/pages/createClient.php" role="button">
                  <button type="button" class="btn btn-success"">Crear Cliente</button>
                </a>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class=" content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Listado de clientes</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Tipo de documentación</th>
                                    <th>Número de documento</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Persona de contacto</th>
                                    <th>Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  foreach ($clients as $client) {
                                    echo '
                <tr>
                    <td>' . $client['tipo_documento'] . '</td>
                    <td>' . $client['numero_documento'] . '</td>
                    <td>' . $client['nombre'] . '</td>
                    <td>' . $client['direccion'] . '</td>
                    <td>' . $client['telefono'] . '</td>
                    <td>' . $client['email'] . '</td>
                    <td>' . $client['nombre_contacto'] . '</td>
                    <td>
                    <a href="views/pages/updateClient.php?id=' . $client['numero_documento'] . '" role="button">
                    <i class="fa-regular fa-pen-to-square"></i>
                    </a> 
                    <a data-toggle="modal" data-target="#modal-delete" data-id = ' . $client['numero_documento'] . ' role="button" style="color: red">
                    <i class="fa-regular fa-trash-can"></i>
                    </a>
                    </td>
                </tr>
                ';
                                  } ?>
                                </tbody>
                                <tfoot>
                                  <tr>
                                  <tr>
                                    <th>Tipo de documentación</th>
                                    <th>Número de documento</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Persona de contacto</th>
                                    <th>Acciones</th>
                                  </tr>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                    <div class="modal fade" id="modal-delete">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Eliminar cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>¿Desea eliminar definitivamente el cliente?</p>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete">Aceptar</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
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
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                  Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
              </footer>
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->

            <!-- jQuery -->
            <script src="views/plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- SweetAlert2 -->
            <script src="views/plugins/sweetalert2/sweetalert2.min.js"></script>
            <!-- Toastr -->
            <script src="views/plugins/toastr/toastr.min.js"></script>
            <!-- AdminLTE App -->
            <script src="views/dist/js/adminlte.min.js"></script>

            <?php
            if (isset($_SESSION["name"]) && $_SESSION["name"] == "creationSuccess") {
              $_SESSION["name"] = "";
              echo "
                    <script>
                        toastr.success('El cliente se creo correctamente');
                    </script>
                  ";
            } else if (isset($_SESSION["name"]) && $_SESSION["name"] == "updateSuccess") {
              $_SESSION["name"] = "";
              echo "
                    <script>
                        toastr.success('El cliente se actualizó correctamente');
                    </script>
                  ";
            } else if (isset($_SESSION["name"]) && $_SESSION["name"] == "eliminationSuccess") {
              $_SESSION["name"] = "";
              echo "
                    <script>
                        toastr.success('El cliente se eliminó correctamente');
                    </script>
                  ";
            }
            ?>
            <script>
              $(document).on('show.bs.modal', '#modal-delete', function(event) {
                var button = $(event.relatedTarget);
                var idClient = button.data('id');
                $("#confirmDelete").data('id', idClient);
              });

              $("#confirmDelete").click(function() {
                var idClient = $(this).data('id');
                window.location.href = "./?action=delete&id=" + idClient;
              });
            </script>
</body>

</html>