  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus text-green"></i> Upload Data End Stock</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=end_stock">Data End Stock</a></li>
              <li class="breadcrumb-item active">Upload Data End Stock</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data End Stock</h3>
        <div class="card-tools">
          <a href="index.php?include=end_stock" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      

      <!-- form start -->
	  <form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?include=konfirmasi_upload_end_stock">

      <div class="card-body">
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
