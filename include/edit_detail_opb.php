<?php 

  if(isset($_GET['data'])){
  $id = $_GET['data'];
  $_SESSION['id']=$id;
    
  //get data Barang Keluar
  $sql_d = "SELECT `id`, `opb_no`, `part_no`, `part_name`, `qty`, `satuan` , `doc_gi_sap` FROM `detail_opb` where `id` = '$id'";
  $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $id             = $data_d[0];
        $opb_no         = $data_d[1];
        $part_no        = $data_d[2];
        $part_name      = $data_d[3];
        $qty            = $data_d[4];
        $satuan         = $data_d[5];
        $doc_gi_sap     = $data_d[6];
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
              <li class="breadcrumb-item"><a href="index.php?include=detail_opb">Data Header OPB</a></li>
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
          <a href="index.php?include=detail_opb" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="index.php?include=konfirmasi_edit_detail_opb" method="post">
        <div class="card-body">

          <!-- <div class="form-group row">
            <label for="kode" class="col-sm-3 col-form-label">Kode OPB</label>
            <div class="col-sm-4">
              <select class="form-control" id="kode" name="kode">
                <option value="0">- Pilih Kode OPB -</option>
                <?php
                $sql_j = "SELECT `hd`.`opb_no` FROM `header_opb` `hd` INNER JOIN `detail_opb` `dd` ON `hd`.`opb_no` = `dd`.`opb_no` WHERE `dd`.`id` = '$id'";
                $query_j = mysqli_query($koneksi,$sql_j);

                while($data_j = mysqli_fetch_row($query_j)){
                  $opb_no         = $data_j[0];
                  // $deperteman = $data_j[1];
                  // $kebutuhan  = $data_j[2];
                ?>
                <option value="<?php echo $opb_no;?>"
                <?php if($opb_no == $opb_no){?> selected="selected" 
                <?php }?>>
                <?php echo $opb_no ;?><?php }?>
              </select>
            </div>
          </div> -->

          <div class="form-group row">
            <label for="kode" class="col-sm-3 col-form-label">OPB No</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $opb_no;?>" required="required" readonly>
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
            <div class="col-sm-4">
              <input type="text" class="form-control" id="part_name" name="part_name" value="<?php echo $part_name;?>" required="required">
           </div>
          </div>
          <div class="form-group row">
            <label for="qty" class="col-sm-3 col-form-label">QTY</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $qty;?>" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $satuan;?>" required="required">
           </div>
          </div>
          <div class="form-group row">
            <label for="doc_gi_sap" class="col-sm-3 col-form-label">Doc GI SAP</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="doc_gi_sap" name="doc_gi_sap" value="<?php echo $doc_gi_sap;?>">
           </div>
          </div>
          <!-- <div class="form-group row">
            <label for="doc_gi_sap" class="col-sm-3 col-form-label">Doc GI SAP</label>
              <div class="col-sm-7">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="doc_gi_sap" id="doc_gi_sap" value="Remain">
                <label class="form-check-label" for="remain">
                  Remain
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="doc_gi_sap" id="doc_gi_sap" value="Close">
                <label class="form-check-label" for="close">
                  Close
                </label>
              </div>
         </div>
       </div> -->

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
