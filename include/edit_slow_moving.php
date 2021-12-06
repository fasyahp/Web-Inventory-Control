<?php 

  if(isset($_GET['data'])){
  $uniq = $_GET['data'];
  $_SESSION['uniq']=$uniq;
    
  //get data Barang Keluar
  $sql_d = "SELECT * FROM `summary` where `uniq` = '$uniq'";
  $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $uniq           = $data_d[0];
        $material       = $data_d[1];
        $plant          = $data_d[2];
        $sl             = $data_d[3];
        $jan            = $data_d[4];
        $feb            = $data_d[5];
        $mar            = $data_d[6];
        $apr            = $data_d[7];
        $mei            = $data_d[8];
        $jun            = $data_d[9];
        $jul            = $data_d[10];
        $agus           = $data_d[11];
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
              <li class="breadcrumb-item"><a href="index.php?include=slow_moving">Data Header OPB</a></li>
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
          <a href="index.php?include=slow_moving" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_slow_moving" method="post">
          <div class="card-body">

           <div class="form-group row">
              <label for="uniq" class="col-sm-3 col-form-label">Uniq Part</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="uniq" name="uniq" value="<?php echo $uniq;?>" readonly>
             </div>
           </div>
           <div class="form-group row">
              <label for="material" class="col-sm-3 col-form-label">Material</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="material" name="material" value="<?php echo $material;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="plant" class="col-sm-3 col-form-label">Plant</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="plant" name="plant" value="<?php echo $plant;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="sl" class="col-sm-3 col-form-label">SL</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="sl" name="sl" value="<?php echo $sl;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="jan" class="col-sm-3 col-form-label">Januari</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="jan" name="jan" value="<?php echo $jan;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="feb" class="col-sm-3 col-form-label">Februari</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="feb" name="feb" value="<?php echo $feb;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="mar" class="col-sm-3 col-form-label">Maret</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="mar" name="mar" value="<?php echo $mar;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="apr" class="col-sm-3 col-form-label">April</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="apr" name="apr" value="<?php echo $apr;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="mei" class="col-sm-3 col-form-label">Mei</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="mei" name="mei" value="<?php echo $mei;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="jun" class="col-sm-3 col-form-label">Juni</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="jun" name="jun" value="<?php echo $jun;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="jul" class="col-sm-3 col-form-label">Juli</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="jul" name="jul" value="<?php echo $jul;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="agus" class="col-sm-3 col-form-label">Agustus</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="agus" name="agus" value="<?php echo $agus;?>" required="required">
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
