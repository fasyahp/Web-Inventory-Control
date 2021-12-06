<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Header dan Detail OPB.xls");
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
		<tr>
			<!-- <th>No</th> -->
			<th>No.</th>
			<th width="40%">OPB No.</th>
			<th width="40%">Deperteman</th>
			<th width="20%">Kebutuhan</th>
			<th width="25%">Cost Center</th>
			<th width="20%">GL Account</th>
			<th width="20%">Refferensi</th>
			<th width="30%">Part No</th>
			<th width="300%">Part Name</th>
			<th width="10%">QTY</th>
			<th width="15%">Satuan</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT `hd`.`opb_no`, `hd`.`deperteman`, `hd`.`kebutuhan`, `hd`.`cost_center`, `hd`.`gl_account`, `hd`.`refferensi`, `dd`.`part_no`, `dd`.`part_name`, `dd`.`qty`, `dd`.`satuan` FROM `header_opb` `hd` INNER JOIN `detail_opb` `dd` ON `dd`.`opb_no` = `hd`.`opb_no`");
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['opb_no']; ?></td>
			<td><?php echo $d['deperteman']; ?></td>
			<td><?php echo $d['kebutuhan']; ?></td>
			<td><?php echo $d['cost_center']; ?></td>
			<td><?php echo $d['gl_account']; ?></td>
			<td><?php echo $d['refferensi']; ?></td>
			<td><?php echo $d['part_no']; ?></td>
			<td><?php echo $d['part_name']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['satuan']; ?></td>
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