<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data TP.xls");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ekspor Data TP</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		th{
			font-weight: bold;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<!-- <th>No</th> -->
			<th>No.</th>
			<th>Date</th>
			<th>Part No.</th>
			<th>Part Name</th>
			<th>QTY</th>
			<th>Material Slip</th>
			<th>Remark</th>
			<th>Header Text</th>
			<th>Doc. TP</th>
			<th>Usser (PIC)</th>
			<th>Category</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tp");
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['date']; ?></td>
			<td><?php echo $d['part_no']; ?></td>
			<td><?php echo $d['part_name']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['material_slip']; ?></td>
			<td><?php echo $d['remark']; ?></td>
			<td><?php echo $d['header_text']; ?></td>
			<td><?php echo $d['doc_tp']; ?></td>
			<td><?php echo $d['usser']; ?></td>
			<td><?php echo $d['category']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>