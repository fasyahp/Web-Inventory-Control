<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data OPB.xls");
?>
<?php 

$koneksi = mysqli_connect("localhost","root","","db_adm");

if(isset($_GET['data'])){
  $id = $_GET['data'];
  //get data OPB
	$sql_opb = "SELECT `hd`.`opb_no`, `hd`.`deperteman`, `hd`.`kebutuhan`, `hd`.`cost_center`, `hd`.`gl_account`, `hd`.`refferensi`, `dd`.`part_no`, `dd`.`part_name`, `dd`.`qty`, `dd`.`satuan` , `dd`.`doc_gi_sap` FROM `header_opb` `hd` INNER JOIN `detail_opb` `dd` ON `dd`.`opb_no` = `hd`.`opb_no`" ;
	$query_m = mysqli_query($koneksi,$sql_opb);
 	while($data_opb = mysqli_fetch_row($query_m)){
 		$opb_no					= $data_opb[0];
		$deperteman   	= $data_opb[1];
		$kebutuhan    	= $data_opb[2];
		$cost_center   	= $data_opb[3];
		$gl_account    	= $data_opb[4];
		$refferensi			= $data_opb[5];
		$part_no       	= $data_opb[6];
		$part_name     	= $data_opb[7];
		$qty           	= $data_opb[8];
		$satuan        	= $data_opb[9];
		$doc_gi_sap    	= $data_opb[10];
	} 
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ekspor Data OPB</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			width: 50%;
		}
		th{
			font-weight: bold;
		}
		h1{
			margin: 10px;
			font-weight: bold;
			text-align: center;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Order Permintaan Barang</h1>
	<h3><?php echo "Hari ".hari_ini(); echo "&nbsp; <b>"; echo date('d / M / y'); echo "</b>";?></h3>
	<table border="1">
		
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		// $no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM `header_opb` WHERE `opb_no` = '$opb_no' " );
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<th colspan="2" width="30%">Kode OPB</th>
			<td colspan="4"><?php echo $d['opb_no']; ?></td>
		</tr>
		<tr>
			<th colspan="2" width="30%">Deperteman</th>
			<td colspan="4"><?php echo $d['deperteman']; ?></td>
		</tr>
		<tr>
			<th colspan="2" width="30%">Kebutuhan</th>
			<td colspan="4"><?php echo $d['kebutuhan']; ?></td>
		</tr>
		<tr>
			<th colspan="2" width="30%">Cost Center</th>
			<td colspan="4"><?php echo $d['cost_center']; ?></td>
		</tr>
		<tr>
			<th colspan="2" width="30%">GL Account</th>
			<td colspan="4"><?php echo $d['gl_account']; ?></td>
		</tr>
		<tr>
			<th colspan="2" width="30%">Refferensi</th>
			<td colspan="4"><?php echo $d['refferensi']; ?></td>
		</tr>
		<?php 
		}
		?>
		<tr></tr>
		<tr></tr>
		<tr>
			<th width="10%">No</th>
			<th width="20%">Part No</th>
			<th width="30%">Part Name</th>
			<th width="10%">QTY</th>
			<th width="15%">Satuan</th>
			<th width="15%">Doc GI SAP</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT `hd`.`deperteman`, `hd`.`kebutuhan`, `hd`.`cost_center`, `hd`.`gl_account`, `hd`.`refferensi`, `dd`.`part_no`, `dd`.`part_name`, `dd`.`qty`, `dd`.`satuan`, `dd`.`doc_gi_sap` FROM `header_opb` `hd` INNER JOIN `detail_opb` `dd` ON `dd`.`opb_no` = `hd`.`opb_no` WHERE `hd`.`opb_no` = '$opb_no' " );
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><center><?php echo $no++; ?></center></td>
			<td><center><?php echo $d['part_no']; ?></center></td>
			<td><?php echo $d['part_name']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['satuan']; ?></td>
			<td><?php echo $d['doc_gi_sap']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<!-- menampilkan data hari dan tanggal -->
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
</body>
</html>