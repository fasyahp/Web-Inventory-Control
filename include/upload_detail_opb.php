  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus text-green"></i> Upload Data Detail OPB</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=detail_opb">Data Detail OPB</a></li>
              <li class="breadcrumb-item active">Upload Data Detail OPB</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Detail OPB</h3>
        <div class="card-tools">
          <a href="index.php?include=detail_opb" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>

      <!-- /.card-header -->
      

      <!-- form start -->
	  <form class="form-horizontal" method="post" action="index.php?include=konfirmasi_upload_detail_opb" enctype="multipart/form-data">

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
          <label class="col-sm-3 col-form-label">File Excel</label>
          <div class="col-sm-4">
            <input type="file" name="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Pilih File</label>
          </div>
        </div>
        <!-- <div class="form-group row">
          <div class="col-sm-4">
            <button type="submit" name="preview" class="btn btn-warning">
                <i class="far fa-eye"></i>&nbsp; Preview Data
              </button>
          </div>
        </div> -->

        <!-- <?php
  
        // $kode   = $_POST['kode'];
        if(isset($_POST['preview'])){
        // $created_at = date("Y-m-d H:i:s");
        // upload file xls
        $target = basename($_FILES['preview']['name']) ;
        move_uploaded_file($_FILES['preview']['tmp_name'], $target);

        // beri permisi agar file xls dapat di baca
        chmod($_FILES['preview']['name'],0777);

        // mengambil isi file xls
        $data = new Spreadsheet_Excel_Reader($_FILES['preview']['name'],false);
        // menghitung jumlah baris data yang ada
        $jumlah_baris = $data->rowcount($sheet_index=0);

        // jumlah default data yang berhasil di import
        $berhasil = 0;

        echo "<table class='table table-bordered'>
            <tr>
              <th colspan='6' class='text-center'>Preview Data</th>
            </tr>
            <tr>
              <th>Deperteman</th>
              <th>Kebutuhan</th>
              <th>Part No</th>
              <th>Part Name</th>
              <th>QTY</th>
              <th>Satuan</th>
            </tr>";

        for ($i=2; $i<=$jumlah_baris ; $i++) { 
          
          $part_no      = $data->val($i, 1);
          $part_name    = $data->val($i, 2);
          $qty          = $data->val($i, 3);
          $satuan       = $data->val($i, 4);
          $doc_gi_sap   = $data->val($i, 5);

          if($part_no != "" && $part_name != "" && $qty != "" && $satuan != "" ){

            // input data ke database (table master_barang)
            // mysqli_query($koneksi,"INSERT into detail_opb (`id`, `opb_no`, `part_no`, `part_name`, `qty`, `satuan`, `doc_gi_sap`)values ('$id', '$kode', '$part_no', '$part_name', '$qty', '$satuan' , '$doc_gi_sap' )");
            // // preview
            echo "<tr>";
                echo "<td>".$deperteman."</td>";
                echo "<td>".$kebutuhan."</td>";
                echo "<td>".$part_no."</td>";
                echo "<td>".$part_name."</td>";
                echo "<td>".$qty."</td>";
                echo "<td>".$satuan."</td>";
                echo "</tr>";
          }
        }
        echo "</table>";
      }

      ?> -->

	        </div>
	        <!-- /.card-body -->
	        <div class="card-footer">
	          <div class="col-sm-12">
	            <button type="submit" name="upload" class="btn btn-info float-right">
                <i class="fas fa-plus"></i>&nbsp; Import Data
              </button>
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
