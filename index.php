<?php 
  session_start();
  include('koneksi/koneksi.php');

  include('asstes/excel_reader2.php');

  if(isset($_GET["include"])){
    $include = $_GET["include"];
    if($include=="konfirmasi_login"){
        include("include/konfirmasi_login.php");
    }else if($include=="sign_out"){
        include("include/sign_out.php");
    }else if($include=="konfirmasi_tambah_user"){
        include("include/konfirmasi_tambah_user.php");
    }else if($include=="konfirmasi_edit_user"){
        include("include/konfirmasi_edit_user.php");
    }else if($include=="konfirmasi_edit_profil"){
        include("include/konfirmasi_edit_profil.php");
    }else if($include=="konfirmasi_tambah_data_barang"){
        include("include/konfirmasi_tambah_data_barang.php");
    }else if($include=="konfirmasi_edit_data_barang"){
        include("include/konfirmasi_edit_data_barang.php");
    }else if($include=="konfirmasi_upload_barang"){
        include("include/konfirmasi_upload_barang.php");
    }else if($include=="konfirmasi_upload_tp"){
        include("include/konfirmasi_upload_tp.php");
    }else if($include=="konfirmasi_tambah_tp"){
        include("include/konfirmasi_tambah_tp.php");
    }else if($include=="konfirmasi_edit_tp"){
        include("include/konfirmasi_edit_tp.php");
    }else if($include=="konfirmasi_update_tp"){
        include("include/konfirmasi_update_tp.php");
    }else if($include=="konfirmasi_upload_hrp"){
        include("include/konfirmasi_upload_hrp.php");
    }else if($include=="konfirmasi_tambah_hrp"){
        include("include/konfirmasi_tambah_hrp.php");
    }else if($include=="konfirmasi_edit_hrp"){
        include("include/konfirmasi_edit_hrp.php");
    }else if($include=="konfirmasi_update_hrp"){
        include("include/konfirmasi_update_hrp.php");
    }else if($include=="konfirmasi_upload_header_opb"){
        include("include/konfirmasi_upload_header_opb.php");
    }else if($include=="konfirmasi_tambah_header_opb"){
        include("include/konfirmasi_tambah_header_opb.php");
    }else if($include=="konfirmasi_edit_header_opb"){
        include("include/konfirmasi_edit_header_opb.php");
    }else if($include=="konfirmasi_upload_detail_opb"){
        include("include/konfirmasi_upload_detail_opb.php");
    }else if($include=="konfirmasi_tambah_detail_opb"){
        include("include/konfirmasi_tambah_detail_opb.php");
    }else if($include=="konfirmasi_edit_detail_opb"){
        include("include/konfirmasi_edit_detail_opb.php");
    }else if($include=="konfirmasi_update_detail_opb"){
        include("include/konfirmasi_update_detail_opb.php");
    }else if($include=="konfirmasi_upload_end_stock"){
        include("include/konfirmasi_upload_end_stock.php");
    }else if($include=="konfirmasi_edit_end_stock"){
        include("include/konfirmasi_edit_end_stock.php");
    }else if($include=="konfirmasi_upload_summary"){
        include("include/konfirmasi_upload_summary.php");
    }else if($include=="konfirmasi_edit_summary"){
        include("include/konfirmasi_edit_summary.php");
    }else if($include=="generate_template_summary"){
        include("include/generate_template_summary.php");
    }else if($include=="konfirmasi_tambah_summary"){
        include("include/konfirmasi_tambah_summary.php");
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <?php include("includes/head.php") ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin SIAM | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
  
  <?php
  //cek ada get include
  if(isset($_GET["include"])){
    $include = $_GET["include"];
    //cek apakah ada session id admin
    if(isset($_SESSION['id_admin'])){
      //pemanggilan ke halaman-halaman menu admin
      ?>
      <body class="hold-transition sidebar-mini layout-fixed" style="background-color: #f4f6f9;">
      <div class="wrapper">
      <?php include("includes/header.php") ?>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="container">
          <?php
          if($include=="user"){
            include("include/user.php");
          }else if($include=="tambah_user"){
            include("include/tambah_user.php");
          }else if($include=="edit_user"){
            include("include/edit_user.php");
          }else if($include=="edit_profil"){
            include("include/edit_profil.php");
          }else if($include=="profil"){
            include("include/profil.php");
          }else if($include=="tp"){
            include("include/tp.php");
          }else if($include=="upload_tp"){
            include("include/upload_tp.php");
          }else if($include=="tambah_tp"){
            include("include/tambah_tp.php");
          }else if($include=="edit_tp"){
            include("include/edit_tp.php");
          }else if($include=="hrp"){
            include("include/hrp.php");
          }else if($include=="upload_hrp"){
            include("include/upload_hrp.php");
          }else if($include=="tambah_hrp"){
            include("include/tambah_hrp.php");
          }else if($include=="edit_hrp"){
            include("include/edit_hrp.php");
          }else if($include=="header_opb"){
            include("include/header_opb.php");
          }else if($include=="upload_header_opb"){
            include("include/upload_header_opb.php");
          }else if($include=="tambah_header_opb"){
            include("include/tambah_header_opb.php");
          }else if($include=="edit_header_opb"){
            include("include/edit_header_opb.php");
          }else if($include=="detail_opb"){
            include("include/detail_opb.php");
          }else if($include=="upload_detail_opb"){
            include("include/upload_detail_opb.php");
          }else if($include=="tambah_detail_opb"){
            include("include/tambah_detail_opb.php");
          }else if($include=="edit_detail_opb"){
            include("include/edit_detail_opb.php");
          }else if($include=="data_opb"){
            include("include/data_opb.php");
          }else if($include=="header_tp"){
            include("include/header_tp.php");
          }else if($include=="detail_tp"){
            include("include/detail_tp.php");
          }else if($include=="data_tp"){
            include("include/data_tp.php");
          }else if($include=="header_hrp"){
            include("include/header_hrp.php");
          }else if($include=="detail_hrp"){
            include("include/detail_hrp.php");
          }else if($include=="data_hrp"){
            include("include/data_hrp.php");
          }else if($include=="end_stock"){
            include("include/end_stock.php");
          }else if($include=="upload_end_stock"){
            include("include/upload_end_stock.php");
          }else if($include=="edit_end_stock"){
            include("include/edit_end_stock.php");
          }else if($include=="summary"){
            include("include/summary.php");
          }else if($include=="upload_summary"){
            include("include/upload_summary.php");
          }else if($include=="edit_summary"){
            include("include/edit_summary.php");
          }else if($include=="tambah_summary"){
            include("include/tambah_summary.php");
          }else{
            include("include/home.php");
          }?>

          <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->
          

        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
      </body>
     <?php    

    }else{
      //pemanggilan halaman form login
      include("include/login.php");
    }  
  }else{
    //pemanggilan halaman form login
    include("include/login.php");
  }
  ?>

</html>
