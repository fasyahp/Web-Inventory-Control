<?php 

// // koneksi
// $koneksi = mysqli_connect("localhost", "root", "", "db_adm");

// if (isset($_POST['cari'])) {
//  $date1 = $_POST['date1'];
//  $date2 = $_POST['date2'];

//  if (!empty($date1) && !empty($date2)) {
//   // perintah tampil data berdasarkan range tanggal
//   $data = mysqli_query($koneksi, "SELECT * FROM end_stock WHERE periode BETWEEN '$date1' and '$date2'"); 
//  } else {
//   // perintah tampil semua data
//   $data = mysqli_query($koneksi, "SELECT * FROM end_stock"); 
//  }
// } else {
//  // perintah tampil semua data
//  $data = mysqli_query($koneksi, "SELECT * FROM end_stock");
// }

?>

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus text-green"></i> Upload Data Summary</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=summary">Data Summary</a></li>
              <li class="breadcrumb-item active">Upload Data Summary</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Summary</h3>
        <div class="card-tools">
          <a href="index.php?include=summary" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      

      <!-- form start -->
	  <!-- <form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?include=generate_template_summary"> -->
      <div class="card-body">

        <!-- <div class="form-group row">
          <label class="col-sm-3 col-form-label">Pilih Bulan</label>
          <div class="col-sm-2">
            <input type="date" name="date1" class="form-control" id="date1">
          </div>
          <div class="">
            <label class="mt-2" for="date2">Sampai</label>
          </div>
          <div class="col-sm-2">
            <input type="date" name="date2" class="form-control" id="date2">
          </div>
        </div>

        <div class="form-group row">
         <button type="submit" name="cari" class="btn btn-secondary" href="include/generate_template_summary.php">
           <i class="fas fa-table"></i>&nbsp; Generate Template
         </button>
        </div> -->
    <!-- </form> -->

    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?include=konfirmasi_upload_summary">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">File Excel</label>
          <div class="col-sm-4">
            <input type="file" name="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Pilih File</label>
          </div>
        </div>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="col-sm-12">
          <button type="submit" name="upload" class="btn btn-info float-right">
            <i class="fas fa-plus"></i>&nbsp; Import Data
          </button>
        </div>  
      </div>
      <!-- /.card-footer -->
    </form>

    </div>
    <!-- /.card -->
    

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

</div>
<!-- ./wrapper -->


</body>
</html>
