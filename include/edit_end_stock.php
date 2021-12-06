<?php 

  if(isset($_GET['data'])){
  $id = $_GET['data'];
  $_SESSION['id']=$id;
    
  //get data Barang Keluar
  $sql_d = "SELECT * FROM `end_stock` where `id` = '$id'";
  $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $id             = $data_d[0];
        $key_end        = $data_d[1];
        $part_no        = $data_d[2];
        $part_name      = $data_d[3];
        $plant          = $data_d[4];
        $sloc           = $data_d[5];
        $periode        = $data_d[6];
        $value          = $data_d[7];
        $currency       = $data_d[8];
        $stock          = $data_d[9];
        $pcs            = $data_d[10];
    }
  }
?>


  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data End Stock</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=end_stock">Data End Stock</a></li>
              <li class="breadcrumb-item active">Edit End Stock</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data End Stock</h3>
        <div class="card-tools">
          <a href="index.php?include=end_stock" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_end_stock" method="post">
          <div class="card-body">

           <div class="form-group row">
              <label for="key_end" class="col-sm-3 col-form-label">Key</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="key_end" name="key_end" value="<?php echo $key_end;?>" readonly>
             </div>
           </div>
           <div class="form-group row">
              <label for="part_no" class="col-sm-3 col-form-label">Part No</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="part_no" name="part_no" value="<?php echo $part_no;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="part_name" class="col-sm-3 col-form-label">Part Name</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="part_name" name="part_name" value="<?php echo $part_name;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="plant" class="col-sm-3 col-form-label">Plant</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="plant" name="plant" value="<?php echo $plant;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="sloc" class="col-sm-3 col-form-label">Sloc</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="sloc" name="sloc" value="<?php echo $sloc;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="periode" class="col-sm-3 col-form-label">Periode</label>
              <div class="col-sm-2">
                <input type="date" class="form-control" id="periode" name="periode" value="<?php echo $periode;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="value" class="col-sm-3 col-form-label">Value</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="value" name="value" value="<?php echo $value;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="currency" class="col-sm-3 col-form-label">Currency</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="currency" name="currency" value="<?php echo $currency;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="stock" class="col-sm-3 col-form-label">Stock</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $stock;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="pcs" class="col-sm-3 col-form-label">Pcs</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="pcs" name="pcs" value="<?php echo $pcs;?>" required="required">
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
