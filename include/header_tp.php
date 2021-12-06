<?php 

if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
  $id = $_GET['data'];

  //hapus Barang Keluar
  $sql_dh = "delete from `tp` where `id` = '$id'";
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
            <h3><i class="fas fa-box text-blue"></i> Data Header Transfer Posting</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Header TP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Data Header TP</h3>
          <div class="card-tools">
            <a href="include/ekspor_tp.php" class="btn btn-sm btn-primary float-right" target="_blank"><i class="fas fa-download"></i> Download</a>
            <a href="index.php?include=tambah_tp" class="btn btn-sm btn-info float-right mr-2"><i class="fas fa-plus"></i> Tambah Data TP</a>
            <a href="index.php?include=upload_tp" class="btn btn-sm btn-success mr-2"><i class="fas fa-plus"></i> Upload Dari Excel</a>
          </div>
        </div>
        <br>

        <!-- /.card-header -->
        <div class="col-md-12">
          <form method="post" action="index.php?include=header_tp">
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

          <!-- <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-6 box-shadow">
                  <div class="card-body">
                    <h4>Update No. Good Issue/TP</h4>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="input-group">
                        <form method="post" enctype="multipart/form-data" action="index.php?include=konfirmasi_update_master_barang">
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
          </div> -->

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

              <!-- <div class="col-sm-8">
                <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){?>
                    <div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){?>
                    <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                  <?php }?>
                <?php }?>
              </div> -->

              <div class="card-body">
                <table class="table table-bordered table-responsive" >
                  <thead>                  
                    <tr>
                      <th width="2%">No</th>
                      <th width="8%">Header Text</th>
                      <th width="6%">Doc. TP</th>
                      <th width="3%">Usser (PIC)</th>
                      <th width="8%">Category</th>
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
                    $sql_h = "SELECT `id`,`header_text`, `doc_tp`, `usser`, `category` FROM `tp` ";
                    if(isset($_POST["katakunci"])){
                      $katakunci_keluar = $_POST["katakunci"];
                      $_SESSION['katakunci_keluar'] = $katakunci_keluar;
                      $sql_h .= " where `header_text` LIKE '%$katakunci_keluar%'";
                      } 
                    $sql_h .= " order by `header_text` limit $posisi, $batas ";
                    $query_h = mysqli_query($koneksi,$sql_h);
                    $no=$posisi+1;
                    while($data_h = mysqli_fetch_row($query_h)){
                    $id             = $data_h[0];
                    $header_text    = $data_h[1];
                    $doc_tp         = $data_h[2];
                    $usser          = $data_h[3];
                    $category       = $data_h[4];
                    ?>  
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $header_text;?></td>
                      <td><?php echo $doc_tp;?></td>
                      <td><?php echo $usser;?></td>
                      <td><?php echo $category;?></td>
                      <td style="text-align: center;">
                        <a href="index.php?include=data_tp&data=<?php echo $id;?>" 
                          class="btn btn-xs btn-primary" title="Detail">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="index.php?include=edit_header_opb&data=<?php echo $id;?>" class="btn btn-xs btn-info" title="Edit">
                          <i class="fas fa-edit"></i> </a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $deperteman; ?>?'))
                          window.location.href = 'index.php?include=header_tp&aksi=hapus&data=<?php echo $id;?>'" class="btn btn-xs btn-warning" title="Hapus"><i class="fas fa-trash"></i> 
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
              $sql_jum = "SELECT `header_text`, `doc_tp`, `usser`, `category` FROM `tp` "; 
              if (isset($_SESSION['katakunci_keluar'])){
                $katakunci_keluar = $_SESSION['katakunci_keluar'];
                $sql_jum .= " where `header_text` LIKE '%$katakunci_keluar%'";
              } 
              $sql_jum .= " order by `header_text`";

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
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=header_tp&katakunci=$katakunci_keluar&halaman=1'> First</a></li>";
                    echo "<li class='page-item'><a class='page-link' 
                      href='index.php?include=header_tp&katakunci=$katakunci_keluar&halaman=$sebelum'>
                          «</a></li>";
                  }

                  for($i=1; $i<=$jum_halaman; $i++){
                    if($i!=$halaman){
                      echo "<li class='page-item'><a class='page-link' 
                          href='index.php?include=header_tp&katakunci=$katakunci_keluar&halaman=$i'>
                            $i</a></li>";
                    }else{
                      echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                  }

                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link'  
                      href='index.php?include=header_tp&katakunci=$katakunci_keluar&halaman=$setelah'>
                      »</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=header_tp&katakunci=$katakunci_keluar&=$jum_halaman'> Last</a></li>";
                  }

                }else{
                  if($halaman!=1){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=header_tp&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=header_tp&halaman=$sebelum'>«</a></li>";
                  }

                  for($i=1; $i<=$jum_halaman; $i++){
                    if($i!=$halaman){
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=header_tp&halaman=$i'>$i</a></li>";
                    }else{
                      echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                  }

                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=header_tp&halaman=$setelah'>»</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=header_tp&halaman=$jum_halaman'>Last</a></li>";
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