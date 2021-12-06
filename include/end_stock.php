<?php 

if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
  $id = $_GET['data'];

  //hapus Barang Keluar
  $sql_dh = "DELETE from `end_stock` where `id` = '$id'";
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
            <h3><i class="fas fa-database text-blue"></i> Data End Stock</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=slow_moving">End Stock</a></li>
              <li class="breadcrumb-item active">Data End Stock</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Data End Stock</h3>
          <div class="card-tools">
            <a href="include/ekspor_end_stock.php" class="btn btn-sm btn-primary float-right mr-2" target="_blank"><i class="fas fa-download"></i> Download</a>
            <a href="index.php?include=upload_end_stock" class="btn btn-sm btn-success mr-2"><i class="fas fa-plus"></i> Upload Dari Excel</a>
          </div>
        </div>
        <br>

        <div class="card-body">
        <table class="table table-bordered">
            <tbody>
              <tr style="font-size: 16px;">
                <td><center>Total Item End Stock</center></td>
                <td><center>Jumlah Item Bulan Maret</center></td>
                <td><center>Jumlah Item Bulan April</center></td>
                <td><center>Jumlah Item Bulan Mei</center></td>
                <td><center>Jumlah Item Bulan Juni</center></td>
                <td><center>Jumlah Item Bulan Juli</center></td>
                <td><center>Jumlah Item Bulan Agustus</center></td>
              </tr>
              <tr style="font-size: 26px; text-align: center;">
                <!-- Total Item End Stock -->
                <?php 
                include('koneksi/koneksi.php');
                // mengambil data OPH
                $data_summary = mysqli_query($koneksi,"SELECT * FROM end_stock");

                // menghitung data OPH
                $jumlah_summary = mysqli_num_rows($data_summary);
                 ?>
                <th><?php echo $jumlah_summary; ?></th>

                <?php 
                include('koneksi/koneksi.php');
                // mengambil data maret
                $data_mar = mysqli_query($koneksi,"SELECT* FROM `end_stock` WHERE `periode` LIKE '%03%' ");

                // menghitung data maret
                $jumlah_mar = mysqli_num_rows($data_mar);
                 ?>
                <th><?php echo $jumlah_mar; ?></th>

                <?php 
                include('koneksi/koneksi.php');
                // mengambil data April
                $data_april = mysqli_query($koneksi,"SELECT* FROM `end_stock` WHERE `periode` LIKE '%04%' ");

                // menghitung data April
                $jumlah_april = mysqli_num_rows($data_april);
                 ?>
                <th><?php echo $jumlah_april; ?></th>
                
                <?php 
                include('koneksi/koneksi.php');
                // mengambil data Mei
                $data_mei = mysqli_query($koneksi,"SELECT* FROM `end_stock` WHERE `periode` LIKE '%05%' ");

                // menghitung data Mei
                $jumlah_mei = mysqli_num_rows($data_mei);
                 ?>
                <th><?php echo $jumlah_mei; ?></th>

                <?php 
                include('koneksi/koneksi.php');
                // mengambil data Juni
                $data_juni = mysqli_query($koneksi,"SELECT* FROM `end_stock` WHERE `periode` LIKE '%06%' ");

                // menghitung data Juni
                $jumlah_juni = mysqli_num_rows($data_juni);
                 ?>
                <th><?php echo $jumlah_juni; ?></th>

                <?php 
                include('koneksi/koneksi.php');
                // mengambil data Juli
                $data_juli = mysqli_query($koneksi,"SELECT* FROM `end_stock` WHERE `periode` LIKE '%07%' ");

                // menghitung data Juli
                $jumlah_juli = mysqli_num_rows($data_juli);
                 ?>
                <th><?php echo $jumlah_juli; ?></th>

                <?php 
                include('koneksi/koneksi.php');
                // mengambil data Agustus
                $data_agus = mysqli_query($koneksi,"SELECT* FROM `end_stock` WHERE `periode` LIKE '%08%' ");

                // menghitung data Agustus
                $jumlah_agus = mysqli_num_rows($data_agus);
                 ?>
                <th><?php echo $jumlah_agus; ?></th>

              </tr>
            </tbody>
          </table>
        </div>
        <br>

        <!-- /.card-header -->
        <div class="col-md-12">
          <form method="post" action="index.php?include=end_stock">
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

              <div class="col-sm-8">
                <?php 
                  if(isset($_GET['berhasil'])){
                    echo '<div class="alert alert-success" role="alert">'.$_GET['berhasil']." Data berhasil diimport.</div>";
                  }else if(isset($_GET['edit'])){
                    echo '<div class="alert alert-success" role="alert">'.$_GET['edit']." Data berhasil diubah.</div>";
                  }else if(isset($_GET['tambah'])){
                    echo '<div class="alert alert-success" role="alert">'.$_GET['tambah']." Data berhasil ditambah.</div>";
                  }
                ?>
              </div>

              <div class="card-body">
                <table class="table table-bordered table-responsive">
                  <thead>                  
                    <tr>
                      <th width="2%">No</th>
                      <th width="10%">Key</th>
                      <th width="10%">Part No</th>
                      <th width="10%">Part Name</th>
                      <th width="3%">Plant</th>
                      <th width="3%">Sloc</th>
                      <th width="7%">Periode</th>
                      <th width="5%">Values</th>
                      <th width="5%">Currency</th>
                      <th width="5%">Stock</th>
                      <th width="3%">Pcs</th>
                      <!-- <th width="3%">Status</th> -->
                      <th width="5%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                      $batas = 5000;
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
                    $sql_h = "SELECT `id`,`key_end`, `part_no`, `part_name`, `plant`, `sloc`, `periode`, `value`, `currency`, `stock`, `pcs` FROM `end_stock` ";
                    if(isset($_POST["katakunci"])){
                      $katakunci_keluar = $_POST["katakunci"];
                      $_SESSION['katakunci_keluar'] = $katakunci_keluar;
                      $sql_h .= "WHERE `part_name` LIKE '%$katakunci_keluar%' ";
                      } 
                    $sql_h .= " order by `periode` desc limit $posisi, $batas ";
                    $query_h = mysqli_query($koneksi,$sql_h);
                    $no=$posisi+1;
                    while($data_h = mysqli_fetch_row($query_h)){
                    $id              = $data_h[0];  
                    $key_end         = $data_h[1];
                    $part_no         = $data_h[2];
                    $part_name       = $data_h[3];
                    $plant           = $data_h[4];
                    $sloc            = $data_h[5];
                    $periode         = $data_h[6];
                    $value           = $data_h[7];
                    $currency        = $data_h[8];
                    $stock           = $data_h[9];
                    $pcs             = $data_h[10];
                    ?>  
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $key_end;?></td>
                      <td><?php echo $part_no;?></td>
                      <td><?php echo $part_name;?></td>
                      <td><?php echo $plant;?></td>
                      <td><?php echo $sloc;?></td>
                      <td><?php echo $periode;?></td>
                      <td><?php echo $value;?></td>
                      <td><?php echo $currency;?></td>
                      <td><?php echo $stock;?></td>
                      <td><?php echo $pcs;?></td>
                      <td style="text-align: center;">
                        <a href="index.php?include=edit_end_stock&data=<?php echo $id;?>" class="btn btn-xs btn-info" title="Edit">
                          <i class="fas fa-edit"></i> </a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $part_name; ?>?'))
                          window.location.href = 'index.php?include=end_stock&aksi=hapus&data=<?php echo $id;?>'" class="btn btn-xs btn-warning" title="Hapus"><i class="fas fa-trash"></i> 
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
              $sql_jum = "SELECT `key_end`, `part_no`, `part_name`, `plant`, `sloc`, `periode`, `value`, `currency`, `stock`, `pcs` FROM `end_stock` "; 
              if (isset($_SESSION['katakunci_keluar'])){
                $katakunci_keluar = $_SESSION['katakunci_keluar'];
                $sql_jum .= "WHERE `part_name` LIKE '%$katakunci_keluar%' ";
              } 
              $sql_jum .= " order by `periode` DESC ";

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
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=end_stock&katakunci=$katakunci_keluar&halaman=1'> First</a></li>";
                    echo "<li class='page-item'><a class='page-link' 
                      href='index.php?include=end_stock&katakunci=$katakunci_keluar&halaman=$sebelum'>
                          «</a></li>";
                  }

                  for($i=1; $i<=$jum_halaman; $i++){
                    if($i!=$halaman){
                      echo "<li class='page-item'><a class='page-link' 
                          href='index.php?include=end_stock&katakunci=$katakunci_keluar&halaman=$i'>
                            $i</a></li>";
                    }else{
                      echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                  }

                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link'  
                      href='index.php?include=end_stock&katakunci=$katakunci_keluar&halaman=$setelah'>
                      »</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=end_stock&katakunci=$katakunci_keluar&=$jum_halaman'> Last</a></li>";
                  }

                }else{
                  if($halaman!=1){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=end_stock&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=end_stock&halaman=$sebelum'>«</a></li>";
                  }

                  for($i=1; $i<=$jum_halaman; $i++){
                    if($i!=$halaman){
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=end_stock&halaman=$i'>$i</a></li>";
                    }else{
                      echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                    }
                  }

                  if($halaman!=$jum_halaman){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=end_stock&halaman=$setelah'>»</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=end_stock&halaman=$jum_halaman'>Last</a></li>";
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