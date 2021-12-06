<?php 

if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
  $id = $_GET['data'];

  //hapus Barang Keluar
  $sql_dh = "delete from `detail_opb` where `id` = '$id'";
    mysqli_query($koneksi,$sql_dh);
  }
}
?>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-box text-blue"></i> Data Detail OPB</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Detail OPB</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Data Detail OPB</h3>
          <div class="card-tools">
            <a href="include/ekspor_detail_opb.php" class="btn btn-sm btn-primary float-right" target="_blank"><i class="fas fa-download"></i> Download</a>
            <a href="index.php?include=tambah_detail_opb" class="btn btn-sm btn-info float-right mr-2"><i class="fas fa-plus"></i> Tambah Data OPB</a>
            <a href="index.php?include=upload_detail_opb" class="btn btn-sm btn-success mr-2"><i class="fas fa-plus"></i> Upload Dari Excel</a>
          </div>
        </div>
        <br>

        <!-- /.card-header -->
        <div class="col-md-12">
          <form method="post" action="index.php?include=detail_opb">
            <div class="row">
              <div class="col-md-4 bottom-10">
                <input type="text" class="form-control" id="kata_kunci" name="katakunci">
              </div>
              <div class="col-md-5 bottom-10">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-search"></i>  Search</button>
                </div>
              </div>
              <!-- .row -->
            </form>
          </div>
          <br>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-6 box-shadow">
                  <div class="card-body">
                    <h4>Update Doc GI SAP</h4>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="input-group">
                        <form method="post" enctype="multipart/form-data" action="index.php?include=konfirmasi_update_detail_opb">
                          <a href="include/generate_template_opb.php" class="btn btn-secondary">
                            <i class="fas fa-table"></i>&nbsp; Generate Template
                          </a><br>
                          <label>File Excel</label>
                          <input type="file" name="file">
                        </div>
                      </div><br>
                      <button type="Submit" name="update" class="btn btn-sm btn-outline-info"><i class="fas fa-edit"></i> Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>


              <div class="col-sm-8">
                <?php 
                  if(isset($_GET['berhasil'])){
                    echo '<div class="alert alert-success" role="alert">'.$_GET['berhasil']." Data berhasil diimport.</div>";
                  }else if(isset($_GET['edit'])){
                    echo '<div class="alert alert-success" role="alert">'.$_GET['edit']." Data berhasil diubah.</div>";
                  }else if(isset($_GET['tambah'])){
                    echo '<div class="alert alert-success" role="alert">'.$_GET['tambah']." Data berhasil ditambah.</div>";
                  }else if(isset($_GET['update'])){
                    echo '<div class="alert alert-success" role="alert">'.$_GET['update']." Data berhasil diupdate.</div>";
                  }
                ?>
              </div>

              <div class="card-body">
                <table class="table table-bordered table-responsive" >
                  <thead>                  
                    <tr>
                      <th width="1%">No</th>
                      <th width="4%">OPB No.</th>
                      <th width="8%">Deperteman</th>
                      <th width="6%">Kebutuhan</th>
                      <th width="3%">Part No</th>
                      <th width="8%">Part Name</th>
                      <th width="2%">QTY</th>
                      <th width="2%">Satuan</th>
                      <th width="6%">Date</th>
                      <th width="6%">Doc GI SAP</th>
                      <th width="4%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                      $batas = 10;
                      if(!isset($_GET['halaman'])){
                           $posisi = 0;
                           $halaman = 1;
                      }else{
                           $halaman = $_GET['halaman'];
                           $posisi = ($halaman-1) * $batas;
                      }
                    ?>

                    <?php
                    //menampilkan data Barang Keluar
                    $sql_h = "SELECT `b`.`id`, `a`.`deperteman`, `a`.`kebutuhan`, `b`.`part_no`, `b`.`part_name`, `b`.`qty`, `b`.`satuan`, `b`.`created_at`, `b`.`opb_no`, `b`.`doc_gi_sap` FROM `detail_opb` `b` INNER JOIN `header_opb` `a` ON `a`.`opb_no` = `b`.`opb_no`";
                    if(isset($_POST["katakunci"])){
                      $katakunci_keluar = $_POST["katakunci"];
                      $_SESSION['katakunci_keluar'] = $katakunci_keluar;
                      $sql_h .= " where `deperteman` LIKE '%$katakunci_keluar%'";
                      } 
                    $sql_h .= " order by `created_at` desc limit $posisi, $batas ";
                    $query_h = mysqli_query($koneksi,$sql_h);
                    $no=$posisi+1;
                    while($data_h = mysqli_fetch_row($query_h)){
                    $id             = $data_h[0];
                    $deperteman     = $data_h[1];
                    $kebutuhan      = $data_h[2];
                    $part_no        = $data_h[3];
                    $part_name      = $data_h[4];
                    $qty            = $data_h[5];
                    $satuan         = $data_h[6];
                    $created_at     = $data_h[7];
                    $opb_no         = $data_h[8];
                    $doc_gi_sap     = $data_h[9];
                    ?>  
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $opb_no;?></td>
                      <td><?php echo $deperteman;?></td>
                      <td><?php echo $kebutuhan;?></td>
                      <td><?php echo $part_no;?></td>
                      <td><?php echo $part_name;?></td>
                      <td><?php echo $qty;?></td>
                      <td><?php echo $satuan;?></td>
                      <td><?php echo $created_at;?></td>
                      <td><center>
                        <?php 
                        if ($doc_gi_sap == null) { ?>
                          <button class="btn btn-sm btn-primary">Remain</button>
                        <?php  
                        }else{ ?>
                          <button class="btn btn-sm btn-danger">Close</button>
                        <?php  } ?> 
                        </center>
                      </td>
                      <td>
                        <a href="index.php?include=edit_detail_opb&data=<?php echo $id;?>" class="btn btn-xs btn-info" title="Edit">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $deperteman; ?> dan <?php echo $part_name ?> ?'))
                          window.location.href = 'index.php?include=detail_opb&aksi=hapus&data=<?php echo $id;?>'" class="btn btn-xs btn-warning" title="Hapus">
                          <i class="fas fa-trash"></i> 
                        </a> 
                      </td>
                    </tr>
                    <?php
                      $no++; 
                    }?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <?php
              //hitung jumlah semua data 
              $sql_jum = "SELECT `b`.`id`, `a`.`deperteman`, `a`.`kebutuhan`, `b`.`part_no`, `b`.`part_name`, `b`.`qty`, `b`.`satuan`, `b`.`created_at`, `b`.`opb_no`, `b`.`doc_gi_sap` FROM `detail_opb` `b` INNER JOIN `header_opb` `a` ON `a`.`opb_no` = `b`.`opb_no`"; 
              if (isset($_SESSION['katakunci_keluar'])){
                $katakunci_keluar = $_SESSION['katakunci_keluar'];
                $sql_jum .= " where `deperteman` LIKE '%$katakunci_keluar%'";
              } 
              $sql_jum .= " order by `created_at` desc ";

              $query_jum = mysqli_query($koneksi,$sql_jum);
              $jum_data = mysqli_num_rows($query_jum);
              $jum_halaman = ceil($jum_data/$batas);
              ?>

              <ul class="pagination pagination-sm m-0 float-right">
              <?php 
              if($jum_halaman==0){
              //tidak ada halaman
              }else if($jum_halaman==1){
                echo "<li class='page-item'><a class='page-link'>1</a></li>";
              }else{
                $sebelum = $halaman-1;
                $setelah = $halaman+1;

                if (isset($_GET["katakunci"])){
                  $katakunci_keluar = $_GET["katakunci"];

                  if($halaman!=1){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=detail_opb&katakunci=$katakunci_keluar&halaman=1'> First</a></li>";
                    echo "<li class='page-item'><a class='page-link' 
                      href='index.php?include=detail_opb&katakunci=$katakunci_keluar&halaman=$sebelum'>
                          «</a></li>";
                  }

                  for($i=1; $i<=$jum_halaman; $i++){
                    if($i!=$halaman){
                      echo "<li class='page-item'><a class='page-link' 
                          href='index.php?include=detail_opb&katakunci=$katakunci_keluar&halaman=$i'>
                            $i</a></li>";
                    }else{
                      echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                  }

                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link'  
                      href='index.php?include=detail_opb&katakunci=$katakunci_keluar&halaman=$setelah'>
                      »</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=detail_opb&katakunci=$katakunci_keluar&=$jum_halaman'> Last</a></li>";
                  }

                }else{
                  if($halaman!=1){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=detail_opb&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=detail_opb&halaman=$sebelum'>«</a></li>";
                  }

                  for($i=1; $i<=$jum_halaman; $i++){
                    if($i!=$halaman){
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=detail_opb&halaman=$i'>$i</a></li>";
                    }else{
                      echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                  }

                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=detail_opb&halaman=$setelah'>»</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=detail_opb&halaman=$jum_halaman'>Last</a></li>";
                  }
                }
              }?>
            </ul>

              </div>
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