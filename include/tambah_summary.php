  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Summary</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=summary">Summary</a></li>
              <li class="breadcrumb-item active">Tambah Data Summary</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Summary</h3>
        <div class="card-tools">
          <a href="index.php?include=summary" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_tambah_summary">
      <div class="card-body">

        <div class="form-group row">
          <label for="key_end" class="col-sm-3 col-form-label">Key</label>
          <div class="col-sm-4">
            <input type="text" name="key_end" class="form-control" id="key_end" onkeyup="isi_otomatis()">
          </div>
        </div>
        <div class="form-group row">
          <label for="part_no" class="col-sm-3 col-form-label">Part No</label>
          <div class="col-sm-4">
            <input type="text" name="part_no" class="form-control" id="part_no" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="part_name" class="col-sm-3 col-form-label">Part Name</label>
          <div class="col-sm-4">
            <input type="text" name="part_name" class="form-control" id="part_name" value="<?php echo @$mahasiswa['part_name']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="plant" class="col-sm-3 col-form-label">Plant</label>
          <div class="col-sm-2">
            <input type="text" name="plant" class="form-control" id="plant" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="sloc" class="col-sm-3 col-form-label">Sloc</label>
          <div class="col-sm-2">
            <input type="text" name="sloc" class="form-control" id="sloc" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="value" class="col-sm-3 col-form-label">Value</label>
          <div class="col-sm-2">
            <input type="text" name="value" class="form-control" id="value" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="stock" class="col-sm-3 col-form-label">Stock</label>
          <div class="col-sm-2">
            <input type="text" name="stock" class="form-control" id="stock" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="status" class="col-sm-3 col-form-label">Status</label>
          <div class="col-sm-3">
            <input type="text" name="status" class="form-control" id="status" value="">
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
<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_adm");

//variabel nim yang dikirimkan form.php
$key_end = isset($_GET['key_end']);

//mengambil data
$query = mysqli_query($koneksi, "SELECT * FROM `summary_3` WHERE `key_end` ='$key_end'");
$summary = mysqli_fetch_array($query);
$data = array(
            'part_no'    => @$summary['part_no'],
            'part_name'  => @$summary['part_name'],
            'plant'      => @$summary['plant'],
            'sloc'       => @$summary['sloc'],
            'value'      => @$summary['value'],
            'stock'      => @$summary['stock'],);

//tampil data
echo json_encode($data);
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
  function isi_otomatis(){
    var key_end = $("#key_end").val();
    $.ajax({
      url: "index.php?include=ajax_summary",
      data:"key_end="+key_end ,
    }).success(function (data) {
      var json = data,
      obj = JSON.parse(json);
      $('#part_no').val(obj.part_no);
      $('#part_name').val(obj.part_name);
      $('#plant').val(obj.plant);
      $('#sloc').val(obj.sloc);
      $('#value').val(obj.value);
      $('#stock').val(obj.stock);
    });
  }
</script>

</body>
</html>
