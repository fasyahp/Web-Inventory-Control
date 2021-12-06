<?php 

  if(isset($_GET['data'])){
  $id = $_GET['data'];
  $_SESSION['id']=$id;
    
  //get data Barang Keluar
  $sql_d = "SELECT `id`, `date`, `part_no`, `part_name`, `qty`, `material_slip`, `remark`, `header_text`, `doc_tp`, `usser`, `category` FROM `tp` where `id` = '$id'";
  $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $id             = $data_d[0];
        $date           = $data_d[1];
        $part_no        = $data_d[2];
        $part_name      = $data_d[3];
        $qty            = $data_d[4];
        $material_slip  = $data_d[5];
        $remark         = $data_d[6];
        $header_text    = $data_d[7];
        $doc_tp         = $data_d[8];
        $usser          = $data_d[9];
        $category       = $data_d[10];
    }
  }
?>


  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data TP</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=tp">Data Transfer Posting</a></li>
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
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data HRP</h3>
        <div class="card-tools">
          <a href="index.php?include=tp" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_tp" method="post">
          <div class="card-body">
            <div class="form-group row">
              <label for="id" class="col-sm-3 col-form-label">No</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $id;?>" readonly>
             </div>
           </div>
           <div class="form-group row">
              <label for="date" class="col-sm-3 col-form-label">Date</label>
              <div class="col-sm-7">
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $date;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="part_no" class="col-sm-3 col-form-label">Part No</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="part_no" name="part_no" value="<?php echo $part_no;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="part_name" class="col-sm-3 col-form-label">Part Name</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="part_name" name="part_name" value="<?php echo $part_name;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="qty" class="col-sm-3 col-form-label">QTY</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $qty;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="material_slip" class="col-sm-3 col-form-label">Material Slip</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="material_slip" name="material_slip" value="<?php echo $material_slip;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="remark" class="col-sm-3 col-form-label">Remark</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="remark" name="remark" value="<?php echo $remark;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="header_text" class="col-sm-3 col-form-label">Header Text</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="header_text" name="header_text" value="<?php echo $header_text;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="doc_tp" class="col-sm-3 col-form-label">Doc TP</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="doc_tp" name="doc_tp" value="<?php echo $doc_tp;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="usser" class="col-sm-3 col-form-label">Usser</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="usser" name="usser" value="<?php echo $usser;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="category" class="col-sm-3 col-form-label">Category</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="category" name="category" value="<?php echo $category;?>" required="required">
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
