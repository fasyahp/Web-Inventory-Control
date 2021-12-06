<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Generate Template Summary.xls");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Generate Template Summary</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			width: 50%;
		}
		th{
			font-weight: bold;
			font-size: 16px;
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
	<table border="1">
		<tr>
			<th >ID</th>
			<th >Key</th>
			<th >Part No</th>
			<th >Part Name</th>
			<th >Plant</th>
			<th >Sloc</th>
			<th >Periode</th>
			<th >Value</th>
			<th >Currency</th>
			<th >Stock</th>
			<th >Pcs</th>
			<th >Status</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		$no = 1;

		// if (isset($_POST['cari'])) {
 	// 		$date1 = $_POST['date1'];
 	// 		$date2 = $_POST['date2'];

		// 	if (!empty($date1) && !empty($date2)) {
		// 		// perintah tampil data berdasarkan range tanggal
		// 		$data = mysqli_query($koneksi, "SELECT * FROM end_stock WHERE periode BETWEEN '$date1' and '$date2'"); 
		// 	} else {
		// 		// perintah tampil semua data
		// 		$data = mysqli_query($koneksi, "SELECT * FROM end_stock"); 
		// 	}
		// } 
		// else {
		//  	// perintah tampil semua data
		// 	$data = mysqli_query($koneksi, "SELECT * FROM produk");
		// }

		// menampilkan data pegawai

		// $data = mysqli_query($koneksi,"SELECT * FROM end_stock WHERE periode BETWEEN '$date1' and '$date2' ");
		// $no = 1;
		// while($d = $data->fetch_assoc()) {
		$data = mysqli_query($koneksi,"SELECT * FROM end_stock");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<!-- <td><?php echo $no++; ?></td> -->
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['key_end']; ?></td>
			<td><?php echo $d['part_no']; ?></td>
			<td><?php echo $d['part_name']; ?></td>
			<td><?php echo $d['plant']; ?></td>
			<td><?php echo $d['sloc']; ?></td>
			<td><?php echo $d['periode']; ?></td>
			<td><?php echo $d['value']; ?></td>
			<td><?php echo $d['currency']; ?></td>
			<td><?php echo $d['stock']; ?></td>
			<td><?php echo $d['pcs']; ?></td>
			<!-- <td>Slow Moving</td> -->
			<!-- <?php 
				$stock_1 = $date1. $d['stock'];
				$stock_2 = $date2. $d['stock'];
			 ?>
			<td>
				<?php 
				if ($stock_1 != $stock_2) {
				?>
				<p>Non Slow Moving</p>
				<?php 
					}else{
				?>
				<p>Slow Moving</p>
				<?php } ?>
			</td> -->
		</tr>
		<?php 
		}
		?>
		
	</table>
</body>
</html>