<?php 

if(isset($_GET['data'])){
  $opb_no = $_GET['data'];
  //get data OPB
  $sql_opb = "SELECT `b`.`opb_no`, `b`.`deperteman`, `b`.`kebutuhan`, `b`.`cost_center`, `b`.`gl_account`, `a`.`part_no`, `a`.`part_name`, `a`.`qty`, `a`.`satuan`, `a`.`doc_gi_sap` FROM `header_opb` `b` INNER JOIN `detail_opb` `a` ON `b`.`opb_no` = `a`.`opb_no` WHERE `b`.`opb_no` = '$opb_no' ";
 $query_m = mysqli_query($koneksi,$sql_opb);
 while($data_opb = mysqli_fetch_row($query_m)){
   $opb_no        = $data_opb[0];
   $deperteman    = $data_opb[1];
   $kebutuhan     = $data_opb[2];
   $cost_center   = $data_opb[3];
   $gl_account    = $data_opb[4];
   $part_no       = $data_opb[5];
   $part_name     = $data_opb[6];
   $qty           = $data_opb[7];
   $satuan        = $data_opb[8];
   $doc_gi_sap    = $data_opb[9];
 } 
}
?>


  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-database"></i> Header dan Detail Data OPB</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=header_opb">Data OPB</a></li>
              <li class="breadcrumb-item active">Header dan Detail Data OPb</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <a href="index.php?include=header_opb" class="btn btn-sm btn-warning float-right ml-2"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            <a href="include/ekspor_data_opb.php?data=<?php echo $id;?>" class="btn btn-sm btn-primary float-right" target="_blank"><i class="fas fa-download" ></i> Download</a>
          </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>  
              <tr>
                <td colspan="5"><i class="fas fa-info-circle"></i>
                  <strong>Form Order Permintaan Barang<strong>
                </td>
              </tr>  
              <tr>
                <td colspan="2" width="10%"><strong>Kode OPB<strong></td>
                <td colspan="4" width="80%"><?php echo $opb_no;?></td>
              </tr>               
              <tr>
                <td colspan="2" width="10%"><strong>Deperteman<strong></td>
                <td colspan="4" width="80%"><?php echo $deperteman;?></td>
              </tr>                 
              <tr>
                <td colspan="2" width="10%"><strong>Kebutuhan<strong></td>
                <td colspan="4" width="80%"><?php echo $kebutuhan;?></td>
              </tr>                 
              <tr>
                <td colspan="2" width="10%"><strong>Cost Center<strong></td>
                <td colspan="4" width="80%"><?php echo $cost_center;?></td>
              </tr> 
              <tr>
                <td colspan="2" width="20%"><strong>GL Account<strong></td>
                <td colspan="4" width="80%"><?php echo $gl_account;?></td>
              </tr>
              <tr>
                <th width="5%">No</th>
                <th width="20%">Part No</th>
                <th width="20%">Part Name</th>
                <th width="10%">QTY</th>
                <th width="10%">Satuan</th>
                <th width="10%">Doc GI SAP</th>
              </tr> 
               <?php 
              include 'koneksi/koneksi.php';
              $no=1;
              $data = mysqli_query($koneksi,"SELECT `a`.`part_no`, `a`.`part_name`, `a`.`qty`, `a`.`satuan`, `a`.`doc_gi_sap` FROM `header_opb` `b` inner join `detail_opb` `a` on `a`.`opb_no` = `b`.`opb_no` WHERE `b`.`opb_no` = '$opb_no' ");
              while($d = mysqli_fetch_array($data)){
              ?>
              <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><?php echo $d['part_no']; ?></td>
                <td><?php echo $d['part_name']; ?></td>
                <td><?php echo $d['qty']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
                <td><?php echo $d['doc_gi_sap']; ?></td>
              </tr>
              <?php 
                }
              ?>

              <!-- <tr>
                <td><strong>Part No<strong></td>
                <td>
                  <ul>
                    <?php
                    //get Detail OPB
                    $sql_h = "SELECT `dd`.`part_no` FROM `list_data_opb` `ld` INNER JOIN `detail_opb` `dd` ON `ld`.`id_detail_opb` = `dd`.`id` INNER JOIN `header_opb` `hd` ON `ld`.`id_header_opb` = `hd`.`id` WHERE `hd`.`id` = '$id'";
                    $query_h = mysqli_query($koneksi,$sql_h);
                    while($data_h = mysqli_fetch_row($query_h)){
                      $part_no= $data_h[0];
                    ?>
                    <li><?php echo $part_no;?></li>
                    <?php }?>
                  </ul>
                </td>
              </tr> -->

              <!-- <tr>
                <td><strong>Part<strong></td>
                <td>
                  <ul>
                    <?php
                    //get Detail OPB
                    $sql_h = "SELECT `a`.`part_no` FROM `detail_opb` `a` INNER JOIN `header_opb` `b` ON `a`.`id_header_opb` = `b`.`id` INNER JOIN `list_data_opb` `c` ON `c`.`id_header_opb` = `b`.`id` WHERE `c`.`id_header_opb` = 'id_header_opb'";
                    $query_h = mysqli_query($koneksi,$sql_h);
                    while($data_h = mysqli_fetch_row($query_h)){
                      $part_no= $data_h[0];
                    ?>
                    <li><?php echo $part_no;?></li>
                    <?php }?>
                  </ul>
                </td>
              </tr> -->
              <!-- <tr>
                <td><strong>Foto Mahasiswa<strong></td>
                <td>
                  <img src="foto/<?php echo $foto;?>" class="img-fluid" width="200px;">
                </td>
              </tr>
              <tr>
                <td><strong>Hobi<strong></td>
                <td>
                  <ul>
                    <?php
                    //get Detail OPB
                    $sql_h = "select `h`.`hobi` from `hobi_mahasiswa` `hm`
                              inner join `hobi` `h` on `h`.`kode_hobi` = `hm`.`kode_hobi` 
                              where `hm`.`nim`='$nim'";
                    $query_h = mysqli_query($koneksi,$sql_h);
                    while($data_h = mysqli_fetch_row($query_h)){
                      $hobi= $data_h[0];
                    ?>
                    <li><?php echo $hobi;?></li>
                    <?php }?>
                  </ul>
                </td>
              </tr> -->

            </tbody>
          </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">&nbsp;</div>
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