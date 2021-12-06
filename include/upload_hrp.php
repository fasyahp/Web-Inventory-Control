  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus text-green"></i> Upload Data Hilang Rusak Produksi</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=hrp">Data Hilang Rusak Produksi</a></li>
              <li class="breadcrumb-item active">Upload Data HRP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data HRP</h3>
        <div class="card-tools">
          <a href="index.php?include=hrp" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      

      <!-- form start -->
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_upload_hrp" enctype="multipart/form-data">

      <div class="card-body">

        <div class="custom-file col-sm-4 mt-3 mb-3">
          <input type="file" class="custom-file-input" name="file" id="customFile">
          <label class="custom-file-label" for="customFile">Pilih File</label>
        </div>
        <br>

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <div class="col-sm-12">
	            <button type="submit" name="upload" class="btn btn-info float-right"><i class="fas fa-plus"></i> Import Data</button>
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
