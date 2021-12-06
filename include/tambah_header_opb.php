  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Header OPB</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=header_opb">Data HRP</a></li>
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
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Header OPB</h3>
        <div class="card-tools">
          <a href="index.php?include=header_opb" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_tambah_header_opb">
	       <div class="card-body">

          <?php
            // https://www.malasngoding.com
            // menghubungkan dengan koneksi database
            include 'koneksi/koneksi.php';

            // mengambil data barang dengan kode paling besar
            $query = mysqli_query($koneksi, "SELECT max(opb_no) as maxKode FROM header_opb");
            $data = mysqli_fetch_array($query);
            $kode_OPB = $data['maxKode'];

            // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
            // dan diubah ke integer dengan (int)
            $urutan = (int) substr($kode_OPB, 2, 2);

            // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
            $urutan++;

            // membentuk kode barang baru
            // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
            // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
            // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 

            $huruf = "/P4/OPB";
            $kode = date("d/m/Y");

            // $kodeBarang = $huruf . sprintf("%03s", $urutan) ;
            $kode_OPB = sprintf("%03s", $urutan) . $huruf  ."/".$kode;
            // $kodeBarang = sprintf("%03s", $urutan) ."/".$kode;
            ?>

            <div class="form-group row">
              <label for="kode" class="col-sm-3 col-form-label">OPB No</label>
              <div class="col-sm-3">
                <input type="text" name="kode" class="form-control" id="kode" value="<?php echo $kode_OPB ?>" readonly>
              </div>
            </div>
	          <div class="form-group row">
	            <label for="deperteman" class="col-sm-3 col-form-label">Deperteman</label>
	            <div class="col-sm-6">
	              <input type="text" name="deperteman" class="form-control" id="deperteman" value="">
	            </div>
	          </div>
            <div class="form-group row">
              <label for="kebutuhan" class="col-sm-3 col-form-label">Kebutuhan</label>
              <div class="col-sm-6">
                <input type="text" name="kebutuhan" class="form-control" id="kebutuhan" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="cost_center" class="col-sm-3 col-form-label">Cost Center</label>
              <div class="col-sm-4">
                <input type="text" name="cost_center" class="form-control" id="cost_center" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="gl_account" class="col-sm-3 col-form-label">GL Account</label>
              <div class="col-sm-4">
                <input type="text" name="gl_account" class="form-control" id="gl_account" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="refferensi" class="col-sm-3 col-form-label">Refferensi</label>
              <div class="col-sm-6">
                <input type="text" name="refferensi" class="form-control" id="refferensi" value="">
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
