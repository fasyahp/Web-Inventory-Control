<?php 

  if(isset($_GET['data'])){
  $id_barang = $_GET['data'];
  $_SESSION['id_barang']=$id_barang;
    
  //get data Barang Keluar
  $sql_d = "select `id_barang`, `nama_barang` from `data_barang` where `id_barang` = '$id_barang'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
      $id_barang= $data_d[0];
      $nama_barang= $data_d[1];
      // $qty= $data_d[2];
      // $unit= $data_d[3];
      // $tgl_keluar= $data_d[4];
      // $harga_jual= $data_d[5];
}
}
?>


  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Barang</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=data_barang">Data Barang</a></li>
              <li class="breadcrumb-item active">Edit Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Barang</h3>
        <div class="card-tools">
          <a href="index.php?include=data_barang" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
        <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data Nama Barang wajib di isi</div>
          <?php }?>
        <?php }?>
      </div>

      <!-- form start -->
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_data_barang" method="post">
          <div class="card-body">
            <div class="form-group row">
              <label for="id_barang" class="col-sm-3 col-form-label">ID Barang</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $id_barang;?>" readonly>
             </div>
           </div>
           <div class="form-group row">
              <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $nama_barang;?>">
             </div>
           </div>
         </div>
         <!-- /.card-body -->
         <div class="card-footer">
           <div class="col-sm-12">
             <button type="submit" class="btn btn-info float-right">
             <i class="fas fa-save"></i> Simpan</button>
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
