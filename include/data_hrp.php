<?php 

if(isset($_GET['data'])){
  $id = $_GET['data'];
  //get data OPB
  $sql_hrp = "SELECT `id`, `refference`, `doc_date`, `shop`, `cost_center`, `doc_gi`, `job_no`, `part_no`, `nama_material`, `vendor`, `qty`, `price`, `kategori_problem` FROM `hrp` WHERE `id` = '$id' ";
 $query_m = mysqli_query($koneksi,$sql_hrp);
  while($data_hrp = mysqli_fetch_row($query_m)){
    $id                   = $data_hrp[0];
    $refference           = $data_hrp[1];
    $doc_date             = $data_hrp[2];
    $shop                 = $data_hrp[3];
    $cost_center          = $data_hrp[4];
    $doc_gi               = $data_hrp[5];
    $job_no               = $data_hrp[6];
    $part_no              = $data_hrp[7];
    $nama_material        = $data_hrp[8];
    $vendor               = $data_hrp[9];
    $qty                  = $data_hrp[10];
    $price                = $data_hrp[11];
    $kategori_problem     = $data_hrp[12];
  } 
}
?>


  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Hilang Rusak Produksi</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=header_hrp">Header HRP></li>
              <li class="breadcrumb-item active">Detail Data HRP</li>
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
            <a href="index.php?include=header_hrp" class="btn btn-sm btn-warning float-right ml-2"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            <a href="include/ekspor_data_opb.php?data=<?php echo $id;?>" class="btn btn-sm btn-primary float-right" target="_blank"><i class="fas fa-download" ></i> Download</a>
          </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>  
              <tr>
                <td colspan="8"><i class="fas fa-info-circle"></i>
                  <strong>Form Hilang Rusak Produksi<strong>
                </td>
              </tr>               
              <tr>
                <td colspan="3" width="10%"><strong>Refference<strong></td>
                <td colspan="5" width="80%"><?php echo $refference;?></td>
              </tr>                 
              <tr>
                <td colspan="3" width="10%"><strong>Doc Date<strong></td>
                <td colspan="5" width="80%"><?php echo $doc_date;?></td>
              </tr>                 
              <tr>
                <td colspan="3" width="10%"><strong>Shop<strong></td>
                <td colspan="5" width="80%"><?php echo $shop;?></td>
              </tr> 
              <tr>
                <td colspan="3" width="20%"><strong>Cost Center<strong></td>
                <td colspan="5" width="80%"><?php echo $cost_center;?></td>
              </tr><tr>
                <td colspan="3" width="20%"><strong>Doc. GI<strong></td>
                <td colspan="5" width="80%"><?php echo $doc_gi;?></td>
              </tr>
              <tr>
                <th width="5%">No</th>
                <th width="8%">Job No</th>
                <th width="10%">Part No</th>
                <th width="28%">Nama Material</th>
                <th width="10%">Vendor</th>
                <th width="5%">QTY</th>
                <th width="10%">Price</th>
                <th width="10%">Category Problem</th>
              </tr>
              <?php $no = 1; ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $job_no;?></td>
                <td><?php echo $part_no;?></td>
                <td><?php echo $nama_material;?></td>
                <td><?php echo $vendor;?></td>
                <td><?php echo $qty;?></td>
                <td><?php echo $price;?></td>
                <td><?php echo $kategori_problem;?></td>
              </tr> 
               <!-- <?php 
              include 'koneksi/koneksi.php';
              $no=1;
              $data = mysqli_query($koneksi,"SELECT `a`.`part_no`, `a`.`part_name`, `a`.`qty`, `a`.`satuan` FROM `header_opb` `b` inner join `detail_opb` `a` on `a`.`id_header_opb` = `b`.`id` WHERE `b`.`id` = '$id' ");
              while($d = mysqli_fetch_array($data)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['part_no']; ?></td>
                <td><?php echo $d['part_name']; ?></td>
                <td><?php echo $d['qty']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
              </tr>
              <?php 
                }
              ?> -->

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