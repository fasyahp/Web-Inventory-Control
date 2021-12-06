  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Data Barang</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=data_barang">Data Barang</a></li>
              <li class="breadcrumb-item active">Tambah Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Barang</h3>
        <div class="card-tools">
          <a href="index.php?include=data_barang" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data hobi wajib di isi</div>
          <?php }?>
        <?php }?>

       <!--  <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
        <?php }?> -->
	  </div>

      <!-- form start -->
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_tambah_data_barang">
	       <div class="card-body">
	          <div class="form-group row">
	            <label for="id_barang" class="col-sm-3 col-form-label">ID Barang</label>
	            <div class="col-sm-2">
	              <input type="text" name="id_barang" class="form-control" id="id_barang" value="">
	            </div>
	          </div>
            <div class="form-group row">
              <label for="nama_barang" class="col-sm-3 col-form-label">Nama barang</label>
              <div class="col-sm-7">
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="">
              </div>
            </div>
	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <div class="col-sm-12">
	            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
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
