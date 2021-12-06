<?php 

if(isset($_GET['data'])){
  $id = $_GET['data'];
  //get data OPB
  $sql_tp = "SELECT `id`, `header_text`, `doc_tp`, `usser`, `category`, `date`, `part_no`, `part_name`, `qty`, `material_slip`, `remark` FROM `tp` WHERE `id` = '$id' ";
 $query_m = mysqli_query($koneksi,$sql_tp);
 while($data_tp = mysqli_fetch_row($query_m)){
   $id              = $data_tp[0];
   $header_text     = $data_tp[1];
   $doc_tp          = $data_tp[2];
   $usser           = $data_tp[3];
   $category        = $data_tp[4];
   $date            = $data_tp[5];
   $part_no         = $data_tp[6];
   $part_name       = $data_tp[7];
   $qty             = $data_tp[8];
   $material_slip   = $data_tp[9];
   $remark          = $data_tp[10];
 } 
}
?>


  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data TP</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=header_tp">Header TP</a></li>
              <li class="breadcrumb-item active">Detail Data TP</li>
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
            <a href="index.php?include=header_tp" class="btn btn-sm btn-warning float-right ml-2"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            <a href="include/ekspor_data_opb.php?data=<?php echo $id;?>" class="btn btn-sm btn-primary float-right" target="_blank"><i class="fas fa-download" ></i> Download</a>
          </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>  
              <tr>
                <td colspan="7"><i class="fas fa-info-circle"></i>
                  <strong>Form Transfer Posting<strong>
                </td>
              </tr>               
              <tr>
                <td colspan="2" width="10%"><strong>Header Text<strong></td>
                <td colspan="5" width="80%"><?php echo $header_text;?></td>
              </tr>                 
              <tr>
                <td colspan="2" width="10%"><strong>Doc TP<strong></td>
                <td colspan="5" width="80%"><?php echo $doc_tp;?></td>
              </tr>                 
              <tr>
                <td colspan="2" width="10%"><strong>User (PIC)<strong></td>
                <td colspan="5" width="80%"><?php echo $usser;?></td>
              </tr> 
              <tr>
                <td colspan="2" width="20%"><strong>Category<strong></td>
                <td colspan="5" width="80%"><?php echo $category;?></td>
              </tr>
              <tr>
                <th width="10%">No</th>
                <th width="20%">Date</th>
                <th width="20%">Part No</th>
                <th width="10%">Part Name</th>
                <th width="10%">QTY</th>
                <th width="10%">Material SLIP</th>
                <th width="10%">Remarks</th>
              </tr>
              <?php $no = 1; ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $date;?></td>
                <td><?php echo $part_no;?></td>
                <td><?php echo $part_name;?></td>
                <td><?php echo $qty;?></td>
                <td><?php echo $material_slip;?></td>
                <td><?php echo $remark;?></td>
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