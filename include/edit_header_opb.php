<?php 

  if(isset($_GET['data'])){
  $opb_no = $_GET['data'];
  $_SESSION['opb_no']=$opb_no;
    
  //get data Barang Keluar
  $sql_d = "SELECT `opb_no`, `deperteman`, `kebutuhan`, `cost_center`, `gl_account`, `refferensi` FROM `header_opb` where `opb_no` = '$opb_no'";
  $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $opb_no             = $data_d[0];
        $deperteman     = $data_d[1];
        $kebutuhan      = $data_d[2];
        $cost_center    = $data_d[3];
        $gl_account     = $data_d[4];
        $refferensi     = $data_d[5];
    }
  }
?>


  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Header OPB</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=header_opb">Data Header OPB</a></li>
              <li class="breadcrumb-item active">Edit Data TP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Header OPB</h3>
        <div class="card-tools">
          <a href="index.php?include=header_opb" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      <br>
      <div class="col-sm-10">
        <!-- <?php if(!empty($_GET['notif'])){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data Nama Barang wajib di isi</div>
          <?php }?>
        <?php }?> -->

        <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
        <?php }?>
      </div>

      <!-- form start -->
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_header_opb" method="post">
          <div class="card-body">

           <div class="form-group row">
              <label for="kode" class="col-sm-3 col-form-label">Kode OPB</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $opb_no;?>" readonly>
             </div>
           </div>
           <div class="form-group row">
              <label for="deperteman" class="col-sm-3 col-form-label">Deperteman</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="deperteman" name="deperteman" value="<?php echo $deperteman;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="kebutuhan" class="col-sm-3 col-form-label">Kebutuhan</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="kebutuhan" name="kebutuhan" value="<?php echo $kebutuhan;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="cost_center" class="col-sm-3 col-form-label">Cost Center</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="cost_center" name="cost_center" value="<?php echo $cost_center;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="gl_account" class="col-sm-3 col-form-label">GL Account</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="gl_account" name="gl_account" value="<?php echo $gl_account;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="refferensi" class="col-sm-3 col-form-label">Refferensi</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="refferensi" name="refferensi" value="<?php echo $refferensi;?>" required="required">
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
