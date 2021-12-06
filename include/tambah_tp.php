  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah TP</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=tp">Data TP</a></li>
              <li class="breadcrumb-item active">Tambah Data TP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data TP</h3>
        <div class="card-tools">
          <a href="index.php?include=tp" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_tambah_tp">
	       <div class="card-body">

	          <!-- <div class="form-group row">
	            <label for="id" class="col-sm-3 col-form-label">No</label>
	            <div class="col-sm-2">
	              <input type="text" name="id" class="form-control" id="id" value="">
	            </div>
	          </div> -->
            <div class="form-group row">
              <label for="date" class="col-sm-3 col-form-label">Date</label>
              <div class="col-sm-2">
                <input type="date" name="date" class="form-control" id="date" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="part_no" class="col-sm-3 col-form-label">Part No</label>
              <div class="col-sm-4">
                <input type="text" name="part_no" class="form-control" id="part_no" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="part_name" class="col-sm-3 col-form-label">Part Name</label>
              <div class="col-sm-4">
                <input type="text" name="part_name" class="form-control" id="part_name" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="qty" class="col-sm-3 col-form-label">QTY</label>
              <div class="col-sm-2">
                <input type="text" name="qty" class="form-control" id="qty" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="material_slip" class="col-sm-3 col-form-label">Material Slip</label>
              <div class="col-sm-6">
                <input type="text" name="material_slip" class="form-control" id="material_slip" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="remark" class="col-sm-3 col-form-label">Remark</label>
              <div class="col-sm-4">
                <input type="text" name="remark" class="form-control" id="remark" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="header_text" class="col-sm-3 col-form-label">Header Text</label>
              <div class="col-sm-4">
                <input type="text" name="header_text" class="form-control" id="header_text" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="doc_tp" class="col-sm-3 col-form-label">Doc TP</label>
              <div class="col-sm-4">
                <input type="text" name="doc_tp" class="form-control" id="doc_tp" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="usser" class="col-sm-3 col-form-label">Usser</label>
              <div class="col-sm-4">
                <input type="text" name="usser" class="form-control" id="usser" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="category" class="col-sm-3 col-form-label">Category</label>
              <div class="col-sm-5">
                <input type="text" name="category" class="form-control" id="category" value="">
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
