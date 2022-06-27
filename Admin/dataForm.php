<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="dataForm.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class=" nav-icon bi bi-person-fill fa-2x text-light"></i>
        </div>
        <div class="info">
          <p  class="d-block text-light">
          <?php 
              session_start();
              
               echo $_SESSION['nama_admin'];
              ?> 
          </p>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard  
              </p>
            </a>           
          </li>

          <li class="nav-item menu-open">
            <a href="dataForm.php" class="nav-link active">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Data Form Layanan
              </p>
            </a>           
          </li>

          <li class="nav-item menu-open">
            <a href="dataAdmin.php" class="nav-link">
              <i class="nav-icon ion-person-add" style="padding-left: 8px;"></i>
              <p>
                Data Admin
              </p>
            </a>           
          </li>

          <li class="nav-item menu-open">
            <a href="dataAkunRegistrasi.php" class="nav-link">
              <i class="nav-icon fas bi bi-person-badge-fill"></i>
              <p>
                Data Akun  
              </p>
            </a>           
          </li>
          
          <li class="nav-item menu-open">
            <a href="../logout.php" class="nav-link">
            <i class="nav-icon bi bi-box-arrow-left" ></i>
              <p style="padding-left: 8px;">
                Keluar 
              </p>
            </a>           
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Form Layanan Publik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html" style="text-decoration: none; color: #000;">Dashboard</a></li>              
              <li class="breadcrumb-item ">Data Form Layanan Publik</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-clipboard"></i>
                  Data Form Detail
                </h3>
                <div class="card-tools" >
                  <form action="" class="d-flex" role="search" method="get">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search" style="height: 35px ; margin-right: 5px;">
                    <button class="btn btn-primary btn-sm" type="submit" >
                      <i class="fas fa-search " ></i>
                    </button>
                  </form>                 
                </div>
              </div><!-- /.card-header -->
              <div class="card-body" >
                <div class="tab-content p-0">                  
                  <div class="container-xl">
                    <div class="card" style="border: none; box-shadow: none; border-radius: 15px;">            
                      <table class="table table-hover">                        
                         <thead style="border-top: solid white; border-bottom: 2px solid blueviolet ;">
                         <tr >
                            <td >Status</td>
                            <td>Id</td>
                            <td>Nama</td>                      
                            <td >Pengajuan</td>
                            <td >Berkas</td>
                            <td>Aksi</td>
                          </tr> 
                         </thead>                      
                          <?php

                              include "koneksi.php";

                              $query =  "SELECT s.status ,a.Id_user, a.nama_akun, a.password_akun, a.email_akun from status_form s INNER JOIN akun a ON a.Id_user = s.id_status";
                              $result = mysqli_query($koneksi, $query);
                          
                              if(mysqli_num_rows($result) > 0){
                                  while($row = mysqli_fetch_array($result)){
                              ?>
                        <tbody >
                         <tr>
                          <td style="font-weight: bold;"><?php echo $row["status"] ?></td>                          
                          <td><?php echo $row["Id_user"] ?></td>
                          <td><?php echo $row["nama_akun"] ?></td>
                          <td><?php echo $row["password_akun"] ?></td>
                          <td><?php echo $row["email_akun"] ?></td>
                          <td>
                              <a href="editForm.php?id=<?php echo $row["Id_user"]; ?>">
                              <i class="bi bi-pencil"></i>
                              <a href="delete.php?id=<?php echo $row["Id_user"]; ?>">
                              <i class="bi bi-trash text-dark"></i>
                          </td>
                         </tr>               
                        </tbody>
                        <?php  
                              }
                          }
                          else{
                              echo "0 results";
                          }
                        ?>
                      </table>

                    </div>
                   
                  
                </div> 
                </div>
              </div><!-- /.card-body -->
      </div>

      </div>
    </section>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
