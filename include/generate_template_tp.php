<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Generate Template TP.xls");
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
	<table border="1">
		<tr>
			<th width="30%">ID</th>
			<th width="30%">Date</th>
			<th width="15%">Part No</th>
			<th width="25%">Part Nama</th>
			<th width="10%">QTY</th>
			<th width="30%">Material Slip</th>
			<th width="20%">Remark</th>
			<th width="30%">Header Text</th>
			<th width="20%">Doc TP</th>
			<th width="15%">Usser</th>
			<th width="15%">Category</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","db_adm");

		// menampilkan data pegawai
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM `tp` ");
		// $no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<!-- <td><?php echo $no++; ?></td> -->
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