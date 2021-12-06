  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah HRP</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=hrp">Data HRP</a></li>
              <li class="breadcrumb-item active">Tambah Data HRP</li>
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
      <br>
      <div class="col-sm-8">
        <!-- <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data hobi wajib di isi</div>
          <?php }?>
        <?php }?> -->
        <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))) {?>
          <?php if($_GET['notif']=="tambahKosong") {?>
            <div class="alert alert-danger" role="alert">Maaf data 
              <?php echo $_GET['jenis']; ?> Wajib Diisi</div>
          <?php }?>
        <?php }?> 
	  </div>

      <!-- form start -->
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_tambah_hrp">
	       <div class="card-body">

	          <!-- <div class="form-group row">
	            <label for="id" class="col-sm-3 col-form-label">Id</label>
	            <div class="col-sm-2">
	              <input type="text" name="id" class="form-control" id="id" value="">
	            </div>
	          </div> -->
            <div class="form-group row">
              <label for="refference" class="col-sm-3 col-form-label">Refference</label>
              <div class="col-sm-6">
                <input type="text" name="refference" class="form-control" id="refference" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="doc_date" class="col-sm-3 col-form-label">Doc Date</label>
              <div class="col-sm-4">
                <input type="date" name="doc_date" class="form-control" id="doc_date" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="job_no" class="col-sm-3 col-form-label">Job No</label>
              <div class="col-sm-4">
                <input type="text" name="job_no" class="form-control" id="job_no" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="part_no" class="col-sm-3 col-form-label">Part No</label>
              <div class="col-sm-2">
                <input type="text" name="part_no" class="form-control" id="part_no" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama_material" class="col-sm-3 col-form-label">Nama Material</label>
              <div class="col-sm-7">
                <input type="text" name="nama_material" class="form-control" id="nama_material" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="vendor" class="col-sm-3 col-form-label">Vendor</label>
              <div class="col-sm-6">
                <input type="text" name="vendor" class="form-control" id="vendor" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="qty" class="col-sm-3 col-form-label">QTY</label>
              <div class="col-sm-4">
                <input type="text" name="qty" class="form-control" id="qty" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="shop" class="col-sm-3 col-form-label">Shop</label>
              <div class="col-sm-4">
                <input type="text" name="shop" class="form-control" id="shop" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="cost_center" class="col-sm-3 col-form-label">Cost Center</label>
              <div class="col-sm-4">
                <input type="text" name="cost_center" class="form-control" id="cost_center" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="wh" class="col-sm-3 col-form-label">WH</label>
              <div class="col-sm-4">
                <input type="text" name="wh" class="form-control" id="wh" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="doc_header_text" class="col-sm-3 col-form-label">Doc Header Text</label>
              <div class="col-sm-5">
                <input type="text" name="doc_header_text" class="form-control" id="doc_header_text" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="count_pn" class="col-sm-3 col-form-label">Count PN</label>
              <div class="col-sm-5">
                <input type="text" name="count_pn" class="form-control" id="count_pn" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="kategori_problem" class="col-sm-3 col-form-label">Kategori Problem</label>
              <div class="col-sm-5">
                <input type="text" name="kategori_problem" class="form-control" id="kategori_problem" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="price" class="col-sm-3 col-form-label">Price</label>
              <div class="col-sm-5">
                <input type="text" name="price" class="form-control" id="price" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="doc_gi" class="col-sm-3 col-form-label">Doc Gi</label>
              <div class="col-sm-5">
                <input type="text" name="doc_gi" class="form-control" id="doc_gi" value="">
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
