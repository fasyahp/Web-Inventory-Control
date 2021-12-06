<?php 

  if(isset($_GET['data'])){
  $id = $_GET['data'];
  $_SESSION['id']=$id;
    
  //get data Barang Keluar
  $sql_d = "SELECT `id`, `refference`, `doc_date`, `job_no`, `part_no`, `nama_material`, `vendor`, `qty`, `shop`, `cost_center`, `wh`, `doc_header_text`, `count_pn`, `kategori_problem`, `price`, `doc_gi` FROM `hrp` where `id` = '$id'";
  $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $id                   = $data_d[0];
        $refference           = $data_d[1];
        $doc_date             = $data_d[2];
        $job_no               = $data_d[3];
        $part_no              = $data_d[4];
        $nama_material        = $data_d[5];
        $vendor               = $data_d[6];
        $qty                  = $data_d[7];
        $shop                 = $data_d[8];
        $cost_center          = $data_d[9];
        $wh                   = $data_d[10];
        $doc_header_text      = $data_d[11];
        $count_pn             = $data_d[12];
        $kategori_problem     = $data_d[13];
        $price                = $data_d[14];
        $doc_gi               = $data_d[15];
    }
  }
?>


  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data HRP</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=hrp">Data Hilang Rusak Produksi</a></li>
              <li class="breadcrumb-item active">Edit Data HRP</li>
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
          <a href="index.php?include=hrp" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_hrp" method="post">
          <div class="card-body">
            <div class="form-group row">
              <label for="id" class="col-sm-3 col-form-label">No</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $id;?>" readonly>
             </div>
           </div>
           <div class="form-group row">
              <label for="refference" class="col-sm-3 col-form-label">Refference</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="refference" name="refference" value="<?php echo $refference;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="doc_date" class="col-sm-3 col-form-label">Doc Date</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" id="doc_date" name="doc_date" value="<?php echo $doc_date;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="job_no" class="col-sm-3 col-form-label">Job No</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="job_no" name="job_no" value="<?php echo $job_no;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="part_no" class="col-sm-3 col-form-label">Part No</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="part_no" name="part_no" value="<?php echo $part_no;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="nama_material" class="col-sm-3 col-form-label">Nama Material</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="nama_material" name="nama_material" value="<?php echo $nama_material;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="vendor" class="col-sm-3 col-form-label">Vendor</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="vendor" name="vendor" value="<?php echo $vendor;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="qty" class="col-sm-3 col-form-label">QTY</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $qty;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="shop" class="col-sm-3 col-form-label">Shop</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="shop" name="shop" value="<?php echo $shop;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="cost_center" class="col-sm-3 col-form-label">Cost Center</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="cost_center" name="cost_center" value="<?php echo $cost_center;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="wh" class="col-sm-3 col-form-label">WH</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="wh" name="wh" value="<?php echo $wh;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="doc_header_text" class="col-sm-3 col-form-label">Doc Header Text</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="doc_header_text" name="doc_header_text" value="<?php echo $doc_header_text;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="count_pn" class="col-sm-3 col-form-label">Count PN</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="count_pn" name="count_pn" value="<?php echo $count_pn;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="kategori_problem" class="col-sm-3 col-form-label">Kategori Problem</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="kategori_problem" name="kategori_problem" value="<?php echo $kategori_problem;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="price" class="col-sm-3 col-form-label">Price</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $price;?>" required="required">
             </div>
           </div>
           <div class="form-group row">
              <label for="doc_gi" class="col-sm-3 col-form-label">Doc GI</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="doc_gi" name="doc_gi" value="<?php echo $doc_gi;?>" required="required">
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
