  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Barang Keluar</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=barang_keluar">Barang Keluar</a></li>
              <li class="breadcrumb-item active">Tambah Barang Keluar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Barang Keluar</h3>
        <div class="card-tools">
          <a href="index.php?include=barang_keluar" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
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
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_tambah_barang_keluar">
	       <div class="card-body">
	          <div class="form-group row">
	            <label for="kd_keluar" class="col-sm-3 col-form-label">Kode Barang Keluar</label>
	            <div class="col-sm-2">
	              <input type="text" name="kd_keluar" class="form-control" id="kd_keluar" value="">
	            </div>
	          </div>
            <div class="form-group row">
              <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
              <div class="col-sm-7">
                <select class="form-control" id="nama_barang" name="nama_barang">
                  <option value="0">- Pilih Nama Barang -</option>
                  <?php
                  $sql_j = "select `id_barang`, `nama_barang` from `data_barang` order by `id_barang`";
                  $query_j = mysqli_query($koneksi,$sql_j);

                  while($data_j = mysqli_fetch_row($query_j)){
                    $id_barang = $data_j[0];
                    $nama_barang = $data_j[1];
                  ?>
                  <option value="<?php echo $id_barang;?>"
                    <?php if(!empty($_SESSION['nama_barang'])){
                      if($id_barang==$_SESSION['nama_barang']){?> 
                        selected="selected" <?php }}?>>
                    <?php echo $nama_barang;?><?php }?>
                </select>
              </div>
            </div>
            <!-- <div class="form-group row">
              <label for="nama_barang" class="col-sm-3 col-form-label">Nama barang Keluar</label>
              <div class="col-sm-7">
                <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="">
              </div>
            </div> -->
            <div class="form-group row">
              <label for="qty" class="col-sm-3 col-form-label">QTY</label>
              <div class="col-sm-2">
                <input type="text" name="qty" class="form-control" id="qty" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="unit" class="col-sm-3 col-form-label">Unit</label>
              <div class="col-sm-2">
                <!-- <input type="text" name="unit" class="form-control" id="unit" value=""> -->
                <input type="checkbox" id="unit" name="unit" value="Box">
                  <label for="unit"> Box</label><br>
                  <input type="checkbox" id="unit" name="unit" value="Set">
                  <label for="unit"> Set</label><br>
              </div>
            </div>
            <div class="form-group row">
              <label for="tgl_keluar" class="col-sm-3 col-form-label">Tanggal Keluar</label>
              <div class="col-sm-4">
                <input type="date" name="tgl_keluar" class="form-control" id="tgl_keluar" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="harga_jual" class="col-sm-3 col-form-label">Harga Jual</label>
              <div class="col-sm-4">
                <input type="text" name="harga_jual" class="form-control" id="harga_jual" value="">
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
