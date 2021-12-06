<?php

// $id_admin = $_SESSION['id_admin'];
// //get profil
// $sql = "select `nama`, `email` ,`level` from `admin`
// where `id_admin`='$id_admin'";
//  //echo $sql;
// $query = mysqli_query($koneksi, $sql);
// while($data = mysqli_fetch_row($query)){
//   $nama = $data[0];
//   $email = $data[1];
//   $level = $data[2];

// }
?>

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie text-purple"></i> Profil</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div> -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th rowspan="3"><center><img src="dist/img/Daihatsu 2.png" style="width: 150px;"></center>
                </th>
                <th rowspan="3" style="padding-top: 50px; width: 60%;"><center><h1><b>Dashboard</b></h1></center></th>
                <td><h3 class="text-center">Logistik Planning</h3></td>
              </tr>
              <tr>
                <td style="text-align: center;"><a href="" class="btn btn-success col-md-8">KPI</a></td>
              </tr>
              <tr>
                <td class="text-center"><?php echo "Hari ".hari_ini(); echo "&nbsp; <b>"; echo date('d / M / y'); echo "</b>";?></td>
              </tr>
            </tbody>
          </table> 
          <br><br>

          <table class="table table-bordered">
            <tbody>
              <tr>
                <td colspan="1"></td>
                <th style="font-size:30px; text-align: right;"><?php echo date("d-m-Y"); ?></th>
              </tr>
              <tr>
                <td><center>Jumlah OPB No</center></td>
                <td><center>Jumlah Item OPB</center></td>
              </tr>
              <tr>
                <!-- Jumlah Data OPB No -->
                <?php 
                include('koneksi/koneksi.php');
                // mengambil data OPH
                $data_barang = mysqli_query($koneksi,"SELECT * FROM header_opb");

                // menghitung data OPH
                $jumlah_barang = mysqli_num_rows($data_barang);
                 ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=header_opb" style="color: black;">
                    <?php echo $jumlah_barang; ?> 
                  </a>
                </th>

                <!-- <?php 
                  include('koneksi/koneksi.php');
                  $sql = mysqli_query($koneksi, "SELECT SUM(qty) FROM master_barang");
                  while($data = mysqli_fetch_array($sql)) {
                ?>
                <th style="font-size: 36px; text-align: center;"><?php echo number_format($data['SUM(qty)']) ; ?></th>
              <?php } ?> -->

              <?php 
                include('koneksi/koneksi.php');
                // mengambil data OPH
                $data_detail_opb = mysqli_query($koneksi,"SELECT * FROM detail_opb");

                // menghitung data OPH
                $jumlah_item_opb = mysqli_num_rows($data_detail_opb);
                 ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=detail_opb" style="color: black;">
                    <?php echo $jumlah_item_opb; ?>
                  </a>
                </th>

              <!-- Jumlah total QTY -->
              <!-- <?php
                include 'koneksi/koneksi.php';
                $sql = mysqli_query($koneksi, "SELECT SUM(part_no)
                FROM detail_opb");
                while($data = mysqli_fetch_array($sql)) {
                 ?>
                <th style="font-size: 36px; text-align: center;">
                  <?php echo "" . number_format($data['SUM(part_no)']) ;?>
                </th>
                <?php
                  }
                ?> -->
              </tr>
            </tbody>
          </table>
          <br>

          <table class="table table-bordered">
            <tbody>
              <tr>
                <th colspan="3">Current Month</th>
                <th colspan="11">Month Before</th>
              </tr>
              <tr>
                <td><center>Jumlah Item OPB</center></td>
                <td><center>Jumlah Item Close GI</center></td>
                <td><center>Jumlah Item Remain GI</center></td>
                <td><center>Before Remain</center></td>
                <td><center>Total Item Remain GI</center></td>
              </tr>
              <tr>
                <?php 
                include('koneksi/koneksi.php');
                // mengambil data OPH
                $bulan_ini = date('Y-m-01');
                $data_month_now = mysqli_query($koneksi,"SELECT * FROM `detail_opb` WHERE created_at > '$bulan_ini' ");

                // menghitung data OPH
                $jumlah_item_opb = mysqli_num_rows($data_month_now);
                 ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=detail_opb" style="color: black;">
                    <?php echo $jumlah_item_opb; ?>
                  </a>
                </th>

                <!-- Jumlah Item Close --> 
                <!-- <?php
                include 'koneksi/koneksi.php';
                $sql_close = mysqli_query($koneksi, "SELECT SUM(!ISNULL(doc_gi_sap)) FROM `detail_opb` ");
                while($data_close = mysqli_fetch_array($sql_close)) {
                 ?>
                <th style="font-size: 36px; text-align: center;">
                  <?php echo "" . number_format($data_close['SUM(!ISNULL(doc_gi_sap))']) ;?>
                </th>
                <?php
                  }
                ?>   -->             

                <?php 
                  include('koneksi/koneksi.php');
                  $bulan_close = date('Y-m-01');
                  $sql = mysqli_query($koneksi, "SELECT COUNT(`doc_gi_sap`) FROM `detail_opb` WHERE `doc_gi_sap` != '' AND created_at > '$bulan_close' ");
                  while($data = mysqli_fetch_array($sql)) {
                ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=detail_opb" style="color: black;">
                    <?php echo number_format($data['COUNT(`doc_gi_sap`)']) ; ?>
                  </a>
                </th>
                <?php } ?>


                <!-- Jumlah Item Remain --> 
                 <!-- <?php
                include 'koneksi/koneksi.php';
                $sql_remain = mysqli_query($koneksi, "SELECT SUM(ISNULL(doc_gi_sap)) FROM `detail_opb` ");
                while($data_remain = mysqli_fetch_array($sql_remain)) {
                 ?>
                <th style="font-size: 36px; text-align: center;">
                  <?php echo "" . number_format($data_remain['SUM(ISNULL(doc_gi_sap))']) ;?>
                </th>
                <?php
                  }
                ?> -->


                <?php 
                  include('koneksi/koneksi.php');
                  $bulan_awal = date('Y-m-01');
                  $sql_a = mysqli_query($koneksi, "SELECT COUNT(`doc_gi_sap`) FROM `detail_opb` WHERE `doc_gi_sap` = '' AND created_at > '$bulan_awal' ");
                  while($data_a = mysqli_fetch_array($sql_a)) {
                ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=detail_opb" style="color: black;">
                    <?php echo number_format($data_a['COUNT(`doc_gi_sap`)']) ; ?>
                  </a>
                </th>
                <?php } ?>


                <!-- Jumlah Bulan Januari -->
                <!-- <?php 
                include('koneksi/koneksi.php');
                // mengambil data Bulan yang Remain
                $data = mysqli_query($koneksi,"SELECT * FROM detail_opb WHERE doc_gi_sap = 'Remain' AND created_at LIKE '%2021-01%' ");

                // menghitung data Bulan yang Remain
                $jumlah_jan = mysqli_num_rows($data);
                 ?>
                <th style="font-size: 36px; text-align: center;"><?php echo $jumlah_jan; ?></th> -->


                <!-- Jumlah data remain sebelum bulan ini -->
                <?php 
                  include('koneksi/koneksi.php');
                  $bulan = date('Y-m-01');
                  $sql = mysqli_query($koneksi, "SELECT COUNT(doc_gi_sap) FROM `detail_opb` WHERE doc_gi_sap = '' AND created_at < '$bulan' ");
                  while($data = mysqli_fetch_array($sql)) {
                ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=detail_opb" style="color: black;">
                    <?php echo number_format($data['COUNT(doc_gi_sap)']) ; ?>
                  </a>
                </th>
                <?php } ?>



                <!-- <?php 
                  include('koneksi/koneksi.php');
                  $sql = mysqli_query($koneksi, "SELECT COUNT(doc_gi_sap) FROM detail_opb WHERE doc_gi_sap ='' 
                  AND created_at <= '".date('Y-m-d')."' ORDER BY doc_gi_sap DESC");
                  while($data = mysqli_fetch_array($sql)) {
                ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=detail_opb" style="color: black;">
                    <?php echo number_format($data['COUNT(doc_gi_sap)']) ; ?>
                  </a>
                </th>
                <?php } ?> -->

                <!-- <?php 
                include('koneksi/koneksi.php');
                // mengambil data Bulan yang Remain
                $data = mysqli_query($koneksi,"SELECT * FROM detail_opb WHERE doc_gi_sap = 'Remain' AND created_at LIKE '%2021-11%' ");

                // menghitung data Bulan yang Remain
                $jumlah_jan = mysqli_num_rows($data);
                 ?>
                <th style="font-size: 36px; text-align: center;"><?php echo $jumlah_jan; ?></th> -->

                <!-- Total Item Remain Current Month -->
                <?php 
                  include('koneksi/koneksi.php');
                  $sql = mysqli_query($koneksi, "SELECT COUNT(doc_gi_sap) FROM `detail_opb` WHERE doc_gi_sap = '' ");
                  while($data = mysqli_fetch_array($sql)) {
                ?>
                <th style="font-size: 36px; text-align: center;">
                  <a href="index.php?include=detail_opb" style="color: black;">
                    <?php echo number_format($data['COUNT(doc_gi_sap)']) ; ?>
                  </a>
                </th>
                <?php } ?>



              </tr>
            </tbody>
          </table>
          <br>

          <!-- <canvas class="chart" id="line-chart"></canvas> 
          <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
          <div class="row gy-5">
            <div class="col-sm-6">
              <h2 style="text-align: center;">OPB 6 Month</h2>
              <canvas width="4vw" id="monthChart"></canvas>
            </div>
            <div class="col-sm-6"> 
              <h2 style="text-align: center;">QTY/KBN</h2>
              <canvas width="4vw" id="myChart"></canvas>
            </div>
            <div class="col-sm-6 mt-5">
              <h2 style="text-align: center;">Supplier Name</h2>
              <canvas id="lineChart"></canvas>
            </div>
          </div>



        </div>

        
        <!-- /.card-body -->
        <div class="card-footer clearfix">&nbsp;</div>
      </div>
      <!-- /.card -->
      <?php 
        // function untuk menampilkan nama hari ini dalam bahasa indonesia
        function hari_ini(){
          $hari = date ("D");

          switch($hari){
            case 'Sun':
              $hari_ini = "Minggu";
            break;

            case 'Mon':     
              $hari_ini = "Senin";
            break;

            case 'Tue':
              $hari_ini = "Selasa";
            break;

            case 'Wed':
              $hari_ini = "Rabu";
            break;

            case 'Thu':
              $hari_ini = "Kamis";
            break;

            case 'Fri':
              $hari_ini = "Jumat";
            break;

            case 'Sat':
              $hari_ini = "Sabtu";
            break;
            
            default:
              $hari_ini = "Tidak di ketahui";   
            break;
          }

          return "<b>" . $hari_ini . "</b>";

        }
       ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->


