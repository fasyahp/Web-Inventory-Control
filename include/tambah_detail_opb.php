  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Detail OPB</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=detail_opb">Data Detail OPB</a></li>
              <li class="breadcrumb-item active">Tambah Data Detail OPB</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data detail OPB</h3>
        <div class="card-tools">
          <a href="index.php?include=detail_opb" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_tambah_detail_opb">
      <div class="card-body">

        <div class="form-group row">
          <label for="kode" class="col-sm-3 col-form-label">Kode OPB</label>
          <div class="col-sm-4">
            <select class="form-control" id="kode" name="kode">
              <option value="0">- Pilih Kode OPB -</option>
              <?php
                $sql_j = "select `opb_no` from `header_opb` order by `opb_no`";
                $query_j = mysqli_query($koneksi,$sql_j);

                while($data_j = mysqli_fetch_row($query_j)){
                  $opb_no           = $data_j[0];
                  // $deperteman   = $data_j[1];
                  // $kebutuhan    = $data_j[2];
              ?>
              <option value="<?php echo $opb_no;?>"
                <?php if(!empty($_SESSION['opb_no'])){
                  if($opb_no==$_SESSION['opb_no']){?> 
                    selected="selected" <?php }}?>>
                <?php echo $opb_no; ?><?php }?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="part_no" class="col-sm-3 col-form-label">Part No</label>
          <div class="col-sm-6">
            <input type="text" name="part_no" class="form-control" id="part_no" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="part_name" class="col-sm-3 col-form-label">Part Name</label>
          <div class="col-sm-6">
            <input type="text" name="part_name" class="form-control" id="part_name" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="qty" class="col-sm-3 col-form-label">QTY</label>
          <div class="col-sm-4">
            <input type="text" name="qty" class="form-control" id="qty" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
          <div class="col-sm-4">
            <input type="text" name="satuan" class="form-control" id="satuan" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="doc_gi_sap" class="col-sm-3 col-form-label">Doc GI SAP</label>
          <div class="col-sm-4">
            <input type="text" name="doc_gi_sap" class="form-control" id="doc_gi_sap" value="">
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
