<?php

$id_admin = $_SESSION['id_admin'];
//get profil
$sql = "select `nama` from `admin`
where `id_admin`='$id_admin'";
 //echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
  $nama = $data[0];
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADM | Inventory Control</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
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
  <!-- Date picker -->
  <link rel="stylesheet" href="datepicker/css/datepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class=" navbar navbar-expand navbar-white navbar-light shadow p-3 mb-5 bg-body">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?include=home" class="nav-link">Dashboard</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Master
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li class="dropdown-item">
            <a href="index.php?include=master_barang" class="nav-link">OPB</a>
          </li>
        </ul>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPB
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li class="dropdown-item">
            <a href="index.php?include=header_opb" class="nav-link">Header OPB</a>
          </li>
          <li class="dropdown-item">
            <a href="index.php?include=detail_opb" class="nav-link">Detail OPB</a>
          </li>
        </ul>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?include=hrp" class="nav-link">HRP</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?include=tp" class="nav-link">TP</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block dropdown">
        <a href="#" class="nav-link dropdown-toggle" type="button" id="slowMoving" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Slow Moving
        </a>
        <ul class="dropdown-menu" aria-labelledby="slowMoving">
          <li class="dropdown-item">
            <a href="index.php?include=end_stock" class="nav-link">End Stock</a>
          </li>
          <li class="dropdown-item">
            <a href="index.php?include=summary" class="nav-link">Summary</a>
          </li>
        </ul>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?include=barang_masuk" class="nav-link">Barang Masuk</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?include=barang_keluar" class="nav-link">Barang Keluar</a>
      </li> -->
      <?php 
        if (isset($_SESSION['level'])){
          if($_SESSION['level']=="superadmin"){?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?include=user" class="nav-link">Pengaturan User</a>
      </li>
      <?php } }?>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $nama;?>  
          </a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
            <li class="dropdown-item">
              <a class="nav-link" href="index.php?include=profil">Profil</a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item">
              <a class="nav-link btn btn-danger text-white" href="index.php?include=sign_out">Sign Out <i class="fas fa-sign-out-alt"></i>
              </a>
            </li>
          </ul>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->